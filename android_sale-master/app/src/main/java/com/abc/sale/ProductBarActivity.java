package com.abc.sale;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.os.StrictMode;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import com.github.mikephil.charting.charts.BarChart;
import com.github.mikephil.charting.components.XAxis;
import com.github.mikephil.charting.components.YAxis;
import com.github.mikephil.charting.data.BarData;
import com.github.mikephil.charting.data.BarDataSet;
import com.github.mikephil.charting.data.BarEntry;
import com.github.mikephil.charting.formatter.IndexAxisValueFormatter;
import com.github.mikephil.charting.interfaces.datasets.IBarDataSet;
import com.github.mikephil.charting.utils.ColorTemplate;
import java.util.ArrayList;

import static com.abc.sale.LoginActivity.APP_PREFER;

public class ProductBarActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_product_bar);
        BarChart chart = findViewById(R.id.chart);

        //Set for SyncHttpClient
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
        StrictMode.setThreadPolicy(policy);

        //Show toolbar
        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        getSupportActionBar().setDisplayShowHomeEnabled(true);
        //toolbar.setNavigationIcon(getResources().getDrawable(R.drawable.ic_action_back));
        toolbar.setNavigationOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getApplicationContext(), MainActivity.class);
                startActivity(intent);
                finish();
            }
        });

        String URL = getString(R.string.root_url) + getString(R.string.product_type_count_url);
        final ArrayList<Product> listProduct = Product.getSampleProductData(5, URL);
        Log.d("myxxx",String.valueOf(listProduct.size())+ "xx");
        //Data to entity
        String[] labels = new String[listProduct.size()];
        final ArrayList<BarEntry> entries = new ArrayList<>();
        int index = 0;
        for (Product product : listProduct) {
            entries.add(new BarEntry(index, product.getValue()));
            labels[index] = product.getName();
            Log.d("myxxx",product.getName());
            index++;
        }


        //Entity to data set
        BarDataSet dataset = new BarDataSet(entries, "จำนวนสินค้า");
        dataset.setValueTextSize(12);
        dataset.setColors(ColorTemplate.COLORFUL_COLORS); // set the color

        //Data set to data
        ArrayList<IBarDataSet> dataSets = new ArrayList<IBarDataSet>();
        dataSets.add(dataset);
        BarData data = new BarData(dataSets);

        //Data to chart
        chart.setData(data);

        //Rotate bottom text
        chart.getXAxis().setPosition(XAxis.XAxisPosition.BOTTOM);
        chart.getXAxis().setLabelRotationAngle(0);
        XAxis xAxis = chart.getXAxis();

        //Define labels to xAxis
        chart.getXAxis().setValueFormatter(new IndexAxisValueFormatter(labels));
        //xAxis.setCenterAxisLabels(true);
        xAxis.setLabelCount(labels.length);

        //Define font size
        YAxis LeftAxis = chart.getAxisLeft();
        YAxis RightAxis = chart.getAxisRight();
        xAxis.setTextSize(12);
        LeftAxis.setTextSize(12);
        RightAxis.setTextSize(12);

        //Hide text
        RightAxis.setEnabled(false);//กำหนดให้ตัวเลขด้านขวาไม่ต้องแสดง
        chart.getDescription().setEnabled(false);//ซ่อนคำว่า "Description Label"

        //Hide grid line
        chart.getXAxis().setDrawGridLines(false);
        //chart.getAxisLeft().setDrawGridLines(false);
        //chart.getAxisRight().setDrawGridLines(false);

        //สามารถกำหนด animation ลองกำหนดเฉพาะ แกน X และ Y หรือให้มันพุ่งขึ้นมาในแนวตั้ง 3 วินาที
        //chart.animateY(3000);
        //chart.animateXY(3000,5000);

        //ไม่อนุญาตให้ผู้ใช้งาน zoom ได้
        //chart.setDoubleTapToZoomEnabled(false);
        //chart.setPinchZoom(false);

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
