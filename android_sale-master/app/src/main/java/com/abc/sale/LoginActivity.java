package com.abc.sale;

import android.animation.Animator;
import android.animation.AnimatorListenerAdapter;
import android.annotation.TargetApi;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.os.AsyncTask;
import android.os.Build;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.text.TextUtils;
import android.view.View;
import android.widget.EditText;
import com.abc.sale.util.HttpUtils;
import com.loopj.android.http.RequestParams;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import com.loopj.android.http.JsonHttpResponseHandler;
import cz.msebera.android.httpclient.Header;

public class LoginActivity extends AppCompatActivity  {
    private UserLoginTask mAuthTask = null;
    private SharedPreferences sharedPrefer;
    public static final String APP_PREFER = "appPrefer" ;
    public static final String USERNAME_PREFER = "usernamePref";
    public static final String PASSWORD_PREFER = "passwordPref";
    public static final String EMP_TYPE_PREFER = "empTypePref";
    private View mProgressView;
    private View mLoginFormView;
    private EditText txtUsername;
    private EditText txtPassword;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        mLoginFormView = findViewById(R.id.login_form);
        mProgressView = findViewById(R.id.login_progress);
        txtUsername = findViewById(R.id.txtUsername);
        txtPassword = findViewById(R.id.txtPassword);
    }
    //Go to the main page if a user has logged-in
    @Override
    protected void onResume() {
        sharedPrefer=getSharedPreferences(APP_PREFER, Context.MODE_PRIVATE);
        if ((sharedPrefer.contains(USERNAME_PREFER)) && sharedPrefer.contains(PASSWORD_PREFER)){
            Intent i = new Intent(this, MainActivity.class);
            startActivity(i);
            finish();
        }
        super.onResume();
    }
    public void login(View v) {

        if (mAuthTask != null) { return; }
        txtUsername.setError(null);
        txtPassword.setError(null);

        String username = txtUsername.getText().toString();
        String password = txtPassword.getText().toString();

        if (TextUtils.isEmpty(username)){
            txtUsername.setError("กรุณาระบุชื่อผู้ใช้");
            txtUsername.requestFocus();
        }else if (TextUtils.isEmpty(password)){
            txtPassword.setError("กรุณาระบุรหัสผ่าน");
            txtPassword.requestFocus();
        }else {
            showProgress(true);
            mAuthTask = new UserLoginTask(username, password);
            mAuthTask.execute((Void) null);
        }
    }
    @TargetApi(Build.VERSION_CODES.HONEYCOMB_MR2)
    private void showProgress(final boolean show) {
        // On Honeycomb MR2 we have the ViewPropertyAnimator APIs, which allow
        // for very easy animations. If available, use these APIs to fade-in
        // the progress spinner.
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.HONEYCOMB_MR2) {
            int shortAnimTime = getResources().getInteger(android.R.integer.config_shortAnimTime);

            mLoginFormView.setVisibility(show ? View.GONE : View.VISIBLE);
            mLoginFormView.animate().setDuration(shortAnimTime).alpha(
                    show ? 0 : 1).setListener(new AnimatorListenerAdapter() {
                @Override
                public void onAnimationEnd(Animator animation) {
                    mLoginFormView.setVisibility(show ? View.GONE : View.VISIBLE);
                }
            });

            mProgressView.setVisibility(show ? View.VISIBLE : View.GONE);
            mProgressView.animate().setDuration(shortAnimTime).alpha(
                    show ? 1 : 0).setListener(new AnimatorListenerAdapter() {
                @Override
                public void onAnimationEnd(Animator animation) {
                    mProgressView.setVisibility(show ? View.VISIBLE : View.GONE);
                }
            });
        } else {
            // The ViewPropertyAnimator APIs are not available, so simply show
            // and hide the relevant UI components.
            mProgressView.setVisibility(show ? View.VISIBLE : View.GONE);
            mLoginFormView.setVisibility(show ? View.GONE : View.VISIBLE);
        }
    }
    public class UserLoginTask extends AsyncTask<Void, Void, Boolean> {

        private final String mUsername;
        private final String mPassword;
        Boolean isSuccess = false;

        UserLoginTask(String username, String password) {
            mUsername = username;
            mPassword = password;
        }

        @Override
        protected Boolean doInBackground(Void... params) {
            try {
                // Simulate network access.
                Thread.sleep(2000);
            } catch (InterruptedException e) {
                return false;
            }
            //login
            String url = getString(R.string.root_url) + getString(R.string.login_url);
            RequestParams rp = new RequestParams();
            rp.add("username", txtUsername.getText().toString());
            rp.add("password", txtPassword.getText().toString());

            //AsyncHttpClient client = new AsyncHttpClient();
            HttpUtils.post(url, rp, new JsonHttpResponseHandler() {
                @Override
                public void onSuccess(int statusCode, Header[] headers, JSONObject response) {

                    try {

                        JSONObject obj = new JSONObject(response.toString());
                        String status = (String) obj.get("status");
                        //Log.e("Message", status);
                        if(status.equals("true")){
                            JSONArray data = obj.getJSONArray("data");
                            JSONObject item = data.getJSONObject(0);

                            //Create shared preference to store user data
                            SharedPreferences.Editor editor = sharedPrefer.edit();
                            editor.putString(USERNAME_PREFER, txtUsername.getText().toString());
                            editor.putString(PASSWORD_PREFER, txtPassword.getText().toString());
                            editor.putString(EMP_TYPE_PREFER, item.getString("empType"));
                            editor.commit();

                            //Go to main page
                            Intent intent = new Intent(getApplicationContext(), MainActivity.class);
                            startActivity(intent);
                            //finish();
                            isSuccess = true;
                        }else{
                            //Toast.makeText(getApplicationContext(), "username หรือ password ไม่ถูกต้อง", Toast.LENGTH_LONG).show();
                        }
                    } catch (JSONException e) {
                        e.printStackTrace();
                    }
                }
                //protected void onSuccess(int statusCode, Header[] headers, JSONArray response) { }
            });

            return isSuccess;
        }

        @Override
        protected void onPostExecute(final Boolean success) {
            mAuthTask = null;
            showProgress(false);

            if (success) {
                finish();
            } else {
                txtUsername.setError("ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง");
                txtUsername.requestFocus();
            }
        }

        @Override
        protected void onCancelled() {
            mAuthTask = null;
            showProgress(false);
        }

    }
}

