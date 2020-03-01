package com.abc.sale;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.design.widget.BottomNavigationView;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBar;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity
        implements NavigationView.OnNavigationItemSelectedListener{

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        //Toolbar
        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        getSupportActionBar().setDisplayHomeAsUpEnabled(false);
        getSupportActionBar().setDisplayShowHomeEnabled(true);

        //Navigation view
        DrawerLayout drawer = findViewById(R.id.drawer_layout);
        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(
                this, drawer, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close);
        drawer.addDrawerListener(toggle);
        toggle.syncState();
        NavigationView navigationView = findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);

        //Bottom navigation view
        BottomNavigationView bottomNavigationView = findViewById(R.id.bottom_nav_view);
        bottomNavigationView.setOnNavigationItemSelectedListener(
                new BottomNavigationView.OnNavigationItemSelectedListener() {
            @Override
            public boolean onNavigationItemSelected(@NonNull MenuItem item) {
                switch (item.getItemId()) {
                    case R.id.item_data:
                        Intent intent = new Intent(getApplicationContext(), EmployeeIndexActivity.class);
                        startActivity(intent);
                        finish();
                        return true;

                    case R.id.item_camera:
                        Intent intent_camera = new Intent(getApplicationContext(), CameraActivity.class);
                        startActivity(intent_camera);
                        finish();
                        return true;

                    case R.id.item_qr:
                        Intent intent_qr = new Intent(getApplicationContext(), QrActivity.class);
                        startActivity(intent_qr);
                        finish();
                        return true;

                    case R.id.item_map:
                        Intent intent_map = new Intent(getApplicationContext(), MapsActivity.class);
                        startActivity(intent_map);
                        finish();
                        return true;
                }
                return false;
            }
        });
    }

    // Navigation view
    @Override
    public void onBackPressed() {
        DrawerLayout drawer = findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
    }
    @Override
    public boolean onNavigationItemSelected(MenuItem item) {
        // Handle navigation view item clicks here.
        int id = item.getItemId();

        if(id == R.id.nav_employee) {
            Intent intent = new Intent(getApplicationContext(), EmployeeIndexActivity.class);
            startActivity(intent);
            finish();
        } else if (id == R.id.nav_customer) {
            Toast.makeText(getApplicationContext(), "เลือกข้อมูลลูกค้า", Toast.LENGTH_LONG).show();
        }else if (id == R.id.nav_product) {
            Toast.makeText(getApplicationContext(), "เลือกข้อมูลสินค้า", Toast.LENGTH_LONG).show();
        } else if (id == R.id.nav_sale) {
            Toast.makeText(getApplicationContext(), "เลือกข้อมูลการขาย", Toast.LENGTH_LONG).show();
        } else if (id == R.id.nav_product_report){
            Intent intent = new Intent(getApplicationContext(), ProductBarActivity.class);
            startActivity(intent);
            finish();
        } else if (id == R.id.nav_top_sale){
            Intent intent = new Intent(getApplicationContext(), ProductPieActivity.class);
            startActivity(intent);
            finish();
        } else if (id == R.id.nav_year_report){
            Intent intent = new Intent(getApplicationContext(), ProductLineActivity.class);
            startActivity(intent);
            finish();
        }

        DrawerLayout drawer = findViewById(R.id.drawer_layout);
        drawer.closeDrawer(GravityCompat.START);
        return true;
    }

    //Toolbar
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
            SharedPreferences sharePrefer = getSharedPreferences(LoginActivity.APP_PREFER,
                    Context.MODE_PRIVATE);
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

