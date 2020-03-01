package com.abc.sale;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.DividerItemDecoration;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.Toolbar;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.widget.CheckBox;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.abc.sale.util.HttpUtils;
import com.abc.sale.util.ImageURL;
import com.loopj.android.http.JsonHttpResponseHandler;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

import cz.msebera.android.httpclient.Header;

import static com.abc.sale.LoginActivity.APP_PREFER;

public class EmployeeIndexActivity extends AppCompatActivity {
    RecyclerView recyclerView;
    List<Person> people;
    public String IMAGE_URL = "";
    FloatingActionButton fab;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_employee_index);

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




        //List data
        recyclerView = findViewById(R.id.recyclerView);
        people = new ArrayList<>();
        IMAGE_URL = getString(R.string.root_url) + getString(R.string.image_url) + "employee/";
        String URL = getString(R.string.root_url) + getString(R.string.employee_view_url);
        HttpUtils.get(URL, null, new JsonHttpResponseHandler() {
            @Override
            public void onSuccess(int statusCode, Header[] headers, JSONObject response) {
                try {
                    JSONObject obj = new JSONObject(response.toString());
                    String status = obj.getString("status");
                    if(status.equals("true")) {
                        JSONArray data = obj.getJSONArray("data");
                        //Log.d("myCat",String.valueOf(data.length()));
                        for(int i=0; i < data.length(); i++ ) {
                            //Log.d("myCat", String.valueOf(i));
                            JSONObject item = data.getJSONObject(i);
                            people.add(
                                    new Person(item.getString("empID"),
                                            item.getString("firstName"),
                                            item.getString("lastName"),
                                            item.getString("email"),
                                            item.getString("mobilePhone"),
                                            item.getString("imageFileName")));

                            recyclerView.setLayoutManager(new LinearLayoutManager(getApplicationContext()));
                            recyclerView.setAdapter(new PersonAdapter(people));

                            //add divider
                            recyclerView.addItemDecoration(new DividerItemDecoration(EmployeeIndexActivity.this,
                                    DividerItemDecoration.VERTICAL));
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


        //Go to employee addition page
        fab = findViewById(R.id.fab);
        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(getApplicationContext(), EmployeeAddActivity.class);
                startActivity(intent);
                finish();
            }
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

    class Person {
        public String empID;
        public String firstName;
        public String lastName;
        public String imageFileName;
        public String email;
        public String mobilePhone;
        public boolean isChecked;

        public Person(String empID, String firstName, String lastName,
                      String email, String mobilePhone, String imageFileName) {
            this.empID = empID;
            this.firstName = firstName;
            this.lastName = lastName;
            this.email = email;
            this.mobilePhone = mobilePhone;
            this.imageFileName = imageFileName;
        }
    }
    class PersonAdapter extends RecyclerView.Adapter<PersonAdapter.PersonHolder>  {

        private List<Person> list;

        public PersonAdapter(@NonNull List<Person> list) {
            this.list = list;
        }

        @Override
        public PersonHolder onCreateViewHolder(ViewGroup parent, int viewType) {
            View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.item_person,
                    parent, false);
            return new PersonHolder(view);
        }

        @Override
        public void onBindViewHolder(PersonHolder holder, final int position) {
            Person person = list.get(position);
            holder.person = person;

            if(person.imageFileName.equals("null")){
                new ImageURL(holder.imageView).execute(IMAGE_URL + "empty_img.png");
            }else{
                new ImageURL(holder.imageView).execute(IMAGE_URL + person.imageFileName);
            }

            holder.textView.setText(person.firstName + " " + person.lastName);
            holder.textViewEmail.setText(person.email);
            holder.textViewMobilePhone.setText(person.mobilePhone);

            //holder.checkBox.setChecked(person.isChecked);
            //holder.textView.setText(String.format("%d %s(%d)", position, person.firstName, person.age));
            //holder.textView.setTextColor(Color.RED);

            final String empID = person.empID;
            holder.itemView.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View view) {
                    SharedPreferences sharedPrefer = getSharedPreferences(APP_PREFER, Context.MODE_PRIVATE);
                    Intent intent;
                    //Log.d("mycat","x" + sharedPrefer.getString("EMP_TYPE_PREFER",null));
                    if (sharedPrefer.getString("empTypePref",null).equals("1")){
                        intent = new Intent(view.getContext(), EmployeeDeleteActivity.class);
                    }else{
                        intent = new Intent(view.getContext(), EmployeeViewActivity.class);
                    }
                    intent.putExtra("empID", String.valueOf(empID));
                    view.getContext().startActivity(intent);
                }
            });
        }

        @Override
        public int getItemCount() {
            return list.size();
        }

        class PersonHolder extends RecyclerView.ViewHolder {

            public Person person;
            public TextView textView;
            public ImageView imageView;
            public TextView textViewEmail;
            public TextView textViewMobilePhone;
            public CheckBox checkBox;


            public PersonHolder(View itemView) {
                super(itemView);

                textView = itemView.findViewById(R.id.txtFullName);
                textViewEmail = itemView.findViewById(R.id.txtEmail);
                textViewMobilePhone = itemView.findViewById(R.id.txtMobilePhone);
                imageView = itemView.findViewById(R.id.imageView);

             /*
             checkBox = (CheckBox) itemView.findViewById(R.id.checkbox);
            checkBox.setOnCheckedChangeListener(new CompoundButton.OnCheckedChangeListener() {
                @Override
                public void onCheckedChanged(CompoundButton compoundButton, boolean b) {
                    person.isChecked = b;
                }
            });
            */
            }
        }
    }
}

