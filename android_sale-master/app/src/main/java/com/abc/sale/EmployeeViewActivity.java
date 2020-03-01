package com.abc.sale;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

import com.abc.sale.util.HttpUtils;
import com.loopj.android.http.JsonHttpResponseHandler;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import cz.msebera.android.httpclient.Header;

public class EmployeeViewActivity extends AppCompatActivity {
    TextView txtEmployeeID;
    TextView txtFirstName;
    TextView txtLastName;
    TextView txtUsername;
    TextView txtPassword;
    TextView txtEmail;
    TextView txtMobilePhone;
    TextView txtBirthDate;
    TextView txtGender;
    TextView txtEmpType;
    TextView txtIsActive;
    String empID = "";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_employee_view);
        txtEmployeeID = findViewById(R.id.txtEmployeeID);
        txtUsername = findViewById(R.id.txtUsername);
        txtPassword = findViewById(R.id.txtPassword);
        txtFirstName = findViewById(R.id.txtFirstName);
        txtLastName = findViewById(R.id.txtLastName);
        txtEmail = findViewById(R.id.txtEmail);
        txtMobilePhone = findViewById(R.id.txtMobilePhone);
        txtBirthDate = findViewById(R.id.txtBirthDate);
        txtGender = findViewById(R.id.txtGender);
        txtEmpType = findViewById(R.id.txtEmpType);
        txtIsActive = findViewById(R.id.txtIsActive);

        //Toolbar
        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        getSupportActionBar().setDisplayShowHomeEnabled(true);
        toolbar.setNavigationOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getApplicationContext(), EmployeeIndexActivity.class);
                startActivity(intent);
                finish();
            }
        });


        //Receive empID from caller
        Intent intent = getIntent();
        empID = intent.getExtras().getString("empID");

        String url = getString(R.string.root_url) + getString(R.string.employee_view_url) + empID;

        HttpUtils.get(url, null, new JsonHttpResponseHandler() {
            @Override
            public void onSuccess(int statusCode, Header[] headers, JSONObject response) {
                try {
                    JSONObject obj = new JSONObject(response.toString());
                    String status = obj.getString("status");
                    if(status.equals("true")) {
                        JSONArray data = obj.getJSONArray("data");
                        JSONObject item = data.getJSONObject(0);
                        txtEmployeeID.setText(item.getString("empID"));
                        txtUsername.setText(item.getString("username"));
                        txtPassword.setText(item.getString("password"));
                        txtFirstName.setText(item.getString("firstName"));
                        txtLastName.setText(item.getString("lastName"));
                        txtEmail.setText(item.getString("email"));
                        txtMobilePhone.setText(item.getString("mobilePhone"));
                        txtBirthDate.setText(item.getString("birthDate"));

                        if(item.getString("gender").equals("0")){
                            txtGender.setText("หญิง");
                        }else{
                            txtGender.setText("ชาย");
                        }

                        switch (item.getString("empType")){
                            case "0":
                                txtEmpType.setText("พนักงานทั่วไป");
                                break;
                            case "1":
                                txtEmpType.setText("ผู้ดูแลระบบ");
                                break;
                            case "2":
                                txtEmpType.setText("หัวหน้าคลัง");
                                break;
                        }

                        if(item.getString("isActive").equals("0")){
                            txtIsActive.setText("ไมเป็น");
                        }else{
                            txtIsActive.setText("เป็น");
                        }
                    }else{
                        Toast.makeText(getApplicationContext(), "ไม่สามารถแสดงข้อมูลได้", Toast.LENGTH_LONG).show();
                    }
                } catch (JSONException e) {
                    e.printStackTrace();
                }
            }
            //protected void onSuccess(int statusCode, Header[] headers, JSONArray response) { }
        });
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
            SharedPreferences sharePrefer = getSharedPreferences(LoginActivity.APP_PREFER, Context.MODE_PRIVATE);
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

