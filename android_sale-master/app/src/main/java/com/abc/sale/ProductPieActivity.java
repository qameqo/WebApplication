package com.abc.sale;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.graphics.Color;
import android.os.Bundle;
import android.os.StrictMode;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import com.github.mikephil.charting.charts.PieChart;
import com.github.mikephil.charting.components.Legend;
import com.github.mikephil.charting.data.PieData;
import com.github.mikephil.charting.data.PieDataSet;
import com.github.mikephil.charting.data.PieEntry;
import com.github.mikephil.charting.formatter.PercentFormatter;
import com.github.mikephil.charting.utils.ColorTemplate;
import java.util.ArrayList;
import static com.abc.sale.LoginActivity.APP_PREFER;

public class ProductPieActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_product_pie);
        PieChart chart =  findViewById(R.id.chart);

        //Set for SyncHttpClient
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
        StrictMode.setThreadPolicy(policy);

        //Show toolbar
        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        getSupportActionBar().setDisplayShowHomeEnabled(true);
        toolbar.setNavigationOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getApplicationContext(), MainActivity.class);
                startActivity(intent);
                finish();
            }
        });

        //Get data
        String URL = getString(R.string.root_url) + getString(R.string.product_type_sale_url);
        final ArrayList<Product> listProduct = Product.getSampleProductData(5, URL);

        //Data to entity
        final ArrayList<PieEntry> entries = new ArrayList<>();
        for (Product product : listProduct) {
            entries.add(new PieEntry(product.getValue(), product.getName()));
        }

        //Entity to data set
        PieDataSet dataset = new PieDataSet(entries, "ยอดขาย (บาท)");
        dataset.setSelectionShift(10);
        dataset.setValueTextSize(12f);
        dataset.setValueTextColor(Color.BLACK);
        dataset.setColors(ColorTemplate.COLORFUL_COLORS); // set the color

        //Data set to data
        PieData data = new PieData(dataset);
        data.setValueTextColor(Color.BLACK);
        chart.setData(data);
        chart.setHoleRadius(30);
        chart.setTransparentCircleRadius(40);//=40-30
        chart.setEntryLabelColor(Color.BLACK);
        chart.setCenterText("ยอดขาย (บาท)");

        //Define animation
        chart.animateY(3000);

        //Define outside slide
        dataset.setXValuePosition(PieDataSet.ValuePosition.OUTSIDE_SLICE);
        dataset.setYValuePosition(PieDataSet.ValuePosition.OUTSIDE_SLICE);
        dataset.setValueLinePart1Length(0.5f);
        dataset.setValueLinePart2Length(0.5f);

        //Show percent
        chart.setUsePercentValues(true);
        dataset.setValueFormatter(new PercentFormatter());

        //Define labels
        Legend legend = chart.getLegend();
        legend.setEnabled(false);


        //Hide text
        chart.getDescription().setEnabled(false);//ซ่อนคำว่า "Description Label"
    }

    // Menu
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }
    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        int id = item.getItemId();
        if (id == R.id.action_logout) {
            SharedPreferences sharePrefer = getSharedPreferences(APP_PREFER, Context.MODE_PRIVATE);
            SharedPreferences.Editor editor = sharePrefer.edit();
            editor.clear();  // ทำการลบข้อมูลทั้งหมดจาก preferences
            editor.commit();  // ยืนยันการแก้ไข preferences

            Intent intent = new Intent(getApplicationContext(), LoginActivity.class);
            startActivity(intent);
            finish();
            return true;
        }else if(id == R.id.action_exit){
            moveTaskToBack(true);
            android.os.Process.killProcess(android.os.Process.myPid());
            System.exit(0);
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
