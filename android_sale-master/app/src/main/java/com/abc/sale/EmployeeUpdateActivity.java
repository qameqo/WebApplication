package com.abc.sale;

import android.app.DatePickerDialog;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.design.widget.BottomNavigationView;
import android.support.design.widget.TextInputEditText;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.text.TextUtils;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.CompoundButton;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Spinner;
import android.widget.Switch;
import android.widget.TextView;
import android.widget.Toast;

import com.abc.sale.util.HttpUtils;
import com.loopj.android.http.JsonHttpResponseHandler;
import com.loopj.android.http.RequestParams;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Locale;

import cz.msebera.android.httpclient.Header;

public class EmployeeUpdateActivity extends AppCompatActivity {
    TextInputEditText txtUsername;
    TextInputEditText txtPassword;
    TextInputEditText txtEmpID;
    TextInputEditText txtFirstName;
    TextInputEditText txtLastName;
    TextInputEditText txtEmail;
    TextInputEditText txtMobilePhone;
    TextInputEditText txtBirthDate;
    RadioGroup radioGroupGender;
    RadioButton radioWoman,radioMan;
    Spinner spinnerEmpType;
    Switch switchIsActive;
    final Calendar myCalendar = Calendar.getInstance();
    String[] empTypeitems;
    int empType = 0;
    String empID = "";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_employee_update);
        txtUsername = findViewById(R.id.txtUsername);
        txtPassword = findViewById(R.id.txtPassword);
        txtEmpID = findViewById(R.id.txtEmpID);
        txtEmpID.setEnabled(false);
        txtFirstName = findViewById(R.id.txtFirstName);
        txtLastName = findViewById(R.id.txtLastName);
        txtEmail = findViewById(R.id.txtEmail);
        txtMobilePhone = findViewById(R.id.txtMobilePhone);
        txtBirthDate = findViewById(R.id.txtBirthDate);
        radioGroupGender = findViewById(R.id.radioGroupGender);
        radioWoman = findViewById(R.id.radioWoman);
        radioMan = findViewById(R.id.radioMan);
        spinnerEmpType = findViewById(R.id.spinnerEmpType);
        switchIsActive = findViewById(R.id.switchIsActive);

        //Date picker (Birth date)
        final DatePickerDialog.OnDateSetListener date = new DatePickerDialog.OnDateSetListener() {
            @Override
            public void onDateSet(DatePicker view, int year, int monthOfYear,
                                  int dayOfMonth) {
                // TODO Auto-generated method stub
                myCalendar.set(Calendar.YEAR, year);
                myCalendar.set(Calendar.MONTH, monthOfYear);
                myCalendar.set(Calendar.DAY_OF_MONTH, dayOfMonth);
                String myFormat = "yyyy-MM-dd"; //In which you need put here
                SimpleDateFormat sdf = new SimpleDateFormat(myFormat, Locale.US);
                txtBirthDate.setText(sdf.format(myCalendar.getTime()));
            }

        };
        txtBirthDate.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {
                // TODO Auto-generated method stub
                new DatePickerDialog(EmployeeUpdateActivity.this, date,
                        myCalendar.get(Calendar.YEAR),
                        myCalendar.get(Calendar.MONTH),
                        myCalendar.get(Calendar.DAY_OF_MONTH)).show();
            }
        });

        //Spinner (Employee type)
        empTypeitems = new String[]{"ประเภทพนักงาน","พนักงานทั่วไป", "ผู้ดูแลระบบ", "หัวหน้าคลัง"};
        ArrayAdapter<String> adapter = new ArrayAdapter<>(this,
                android.R.layout.simple_spinner_item, empTypeitems);
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinnerEmpType.setAdapter(adapter);
        spinnerEmpType.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
                empType = position;
            }
            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }
        });

        //Switch button (is Active)
        switchIsActive.setOnCheckedChangeListener(new CompoundButton.OnCheckedChangeListener() {
            public void onCheckedChanged(CompoundButton buttonView, boolean isChecked) {
                if(isChecked){
                }else{
                }
            }
        });


        //Receive empID from caller
        Intent intent = getIntent();
        empID = intent.getExtras().getString("empID");

        //Toolbar
        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
        getSupportActionBar().setDisplayShowHomeEnabled(true);
        toolbar.setNavigationOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                back();
            }
        });

        //Bottom navigation view
        BottomNavigationView bottomNavigationView = findViewById(R.id.bottom_nav_view);
        bottomNavigationView.setOnNavigationItemSelectedListener(
                new BottomNavigationView.OnNavigationItemSelectedListener() {
                    @Override
                    public boolean onNavigationItemSelected(@NonNull MenuItem item) {
                        switch (item.getItemId()) {
                            case R.id.item_update:
                                update();
                                return true;
                            case R.id.item_cancel:
                                cancel();
                                return true;
                        }
                        return false;
                    }
                });

        //show data
        showData(empID);
    }
    private void showData(String empID){
        txtUsername.requestFocus();
        String url = getString(R.string.root_url) + getString(R.string.employee_view_url)  + empID;
        HttpUtils.get(url, null, new JsonHttpResponseHandler() {
            @Override
            public void onSuccess(int statusCode, Header[] headers, JSONObject response) {
                try {
                    JSONObject obj = new JSONObject(response.toString());
                    String status = obj.getString("status");
                    if(status.equals("true")) {
                        JSONArray data = obj.getJSONArray("data");
                        JSONObject item = data.getJSONObject(0);
                        txtEmpID.setText(item.getString("empID"));
                        txtUsername.setText(item.getString("username"));
                        txtPassword.setText(item.getString("password"));
                        txtFirstName.setText(item.getString("firstName"));
                        txtLastName.setText(item.getString("lastName"));
                        txtEmail.setText(item.getString("email"));
                        txtMobilePhone.setText(item.getString("mobilePhone"));
                        txtBirthDate.setText(item.getString("birthDate"));

                        if(item.getString("gender").equals("0")){
                            radioWoman.setChecked(true);
                            radioMan.setChecked(false);
                        }else{
                            radioWoman.setChecked(false);
                            radioMan.setChecked(true);
                        }

                        switch (item.getString("empType")){
                            case "0":
                                spinnerEmpType.setSelection(1);
                                break;
                            case "1":
                                spinnerEmpType.setSelection(2);
                                break;
                            case "2":
                                spinnerEmpType.setSelection(3);
                                break;
                        }

                        if(item.getString("isActive").equals("0")){
                            switchIsActive.setChecked(false);
                        }else{
                            switchIsActive.setChecked(true);
                        }
                    }else{
                        Toast.makeText(getApplicationContext(), "ไม่สามารถแสดงข้อมูลได้",
                                Toast.LENGTH_LONG).show();
                    }
                } catch (JSONException e) {
                    e.printStackTrace();
                }
            }
        });
    }
    public void update() {
        //Validate
        Boolean cancel = false;
        String prefix = "กรุณาระบุ";
        txtUsername.setError(null);
        txtPassword.setError(null);
        txtFirstName.setError(null);
        txtLastName.setError(null);
        txtEmail.setError(null);
        txtMobilePhone.setError(null);
        txtBirthDate.setError(null);
        switchIsActive.setError(null);

        //Empty
        if (TextUtils.isEmpty(txtUsername.getText().toString())){
            cancel = true;
            txtUsername.setError(prefix + txtUsername.getHint().toString());
            txtUsername.requestFocus();
        }else if (TextUtils.isEmpty(txtPassword.getText().toString())){
            cancel = true;
            txtPassword.setError(prefix + txtPassword.getHint().toString());
            txtPassword.requestFocus();
        }else if (TextUtils.isEmpty(txtFirstName.getText().toString())){
            cancel = true;
            txtFirstName.setError(prefix + txtFirstName.getHint().toString());
            txtFirstName.requestFocus();
        }else if (TextUtils.isEmpty(txtLastName.getText().toString())){
            cancel = true;
            txtLastName.setError(prefix + txtLastName.getHint().toString());
            txtLastName.requestFocus();
        }else if (TextUtils.isEmpty(txtEmail.getText().toString())){
            cancel = true;
            txtEmail.setError(prefix + txtEmail.getHint().toString());
            txtEmail.requestFocus();
        }else if (TextUtils.isEmpty(txtMobilePhone.getText().toString())){
            cancel = true;
            txtMobilePhone.setError(prefix + txtMobilePhone.getHint().toString());
            txtMobilePhone.requestFocus();
        }else if (TextUtils.isEmpty(txtBirthDate.getText().toString())){
            cancel = true;
            txtBirthDate.setError(prefix + txtBirthDate.getHint().toString());
            txtBirthDate.requestFocus();
        }else if (empType==0){
            cancel = true;
            ((TextView)spinnerEmpType.getSelectedView()).setError("กรุณาเลือกตำแหน่ง");
            spinnerEmpType.requestFocus();

        }else if(!txtEmail.getText().toString().contains("@")){//Email
            cancel = true;
            txtEmail.setError("รูปแบบอีเมลไม่ถูกต้อง");
            txtEmail.requestFocus();
        }
        if(cancel==false) { //Send data to web API
            String url = getString(R.string.root_url) + getString(R.string.employee_update_url) + empID;
            RequestParams rp = new RequestParams();
            rp.add("username", txtUsername.getText().toString());
            rp.add("password", txtPassword.getText().toString());
            rp.add("firstName", txtFirstName.getText().toString());
            rp.add("lastName", txtLastName.getText().toString());
            rp.add("email", txtEmail.getText().toString());
            rp.add("mobilePhone", txtMobilePhone.getText().toString());
            rp.add("birthDate", txtBirthDate.getText().toString());
            rp.add("gender",radioWoman.isChecked()?"0":"1");
            rp.add("empType", String.valueOf(empType-1));
            rp.add("isActive",switchIsActive.isChecked()?"1":"0");
            HttpUtils.put(url, rp, new JsonHttpResponseHandler() {
                @Override
                public void onSuccess(int statusCode, Header[] headers, JSONObject response) {
                    try {
                        JSONObject json = new JSONObject(response.toString());
                        String status = (String) json.get("status");
                        if (status.equals("true")) {
                            Toast.makeText(getApplicationContext(), "บันทึกข้อมูลเรียบร้อย",
                                    Toast.LENGTH_LONG).show();
                            back();
                        } else {
                            Toast.makeText(getApplicationContext(), "ไม่สามารถบันทึกข้อมูลได้",
                                    Toast.LENGTH_LONG).show();
                        }
                    } catch (JSONException e) {
                        e.printStackTrace();
                    }
                }
            });
        }
    }
    public void cancel() {
        showData(empID);
    }
    private void back(){
        Intent intent = new Intent(getApplicationContext(), EmployeeDeleteActivity.class);
        intent.putExtra("empID", String.valueOf(empID));
        startActivity(intent);
        finish();
    }
    //Menu
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

