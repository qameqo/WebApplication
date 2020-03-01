package com.abc.sale;

import android.content.res.Resources;
import android.support.v7.widget.DividerItemDecoration;
import android.support.v7.widget.LinearLayoutManager;
import android.util.Log;
import android.widget.Toast;

import com.abc.sale.util.HttpUtils;
import com.loopj.android.http.AsyncHttpClient;
import com.loopj.android.http.JsonHttpResponseHandler;
import com.loopj.android.http.SyncHttpClient;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

import cz.msebera.android.httpclient.Header;

public class Product {
    int value;
    String name;

    public Product(String name, int value) {
        this.value = value;
        this.name = name;
    }
    public int getValue() {
        return value;
    }
    public void setValue(int value) {
        this.value = value;
    }
    public String getName() {
        return name;
    }
    public void setName(String name) {
        this.name = name;
    }

    public static ArrayList<Product> getSampleProductData(final int size, final String URL) {
        final ArrayList<Product> product = new ArrayList<>();
        /*
        for (int i = 0; i < size; i++) {
            int item = i+1;
            product.add(new Product("สินค้าที่ " + item, (float) Math.random() * 100));
        }
        */

        SyncHttpClient client = new SyncHttpClient();
        client.get(URL, null, new JsonHttpResponseHandler() {
            @Override
            public void onSuccess(int statusCode, Header[] headers, JSONObject response) {
                try {
                    JSONObject obj = new JSONObject(response.toString());
                    String status = obj.getString("status");
                    if(status.equals("true")) {
                        JSONArray data = obj.getJSONArray("data");
                        for(int i=0; i < data.length(); i++ ) {
                            JSONObject item = data.getJSONObject(i);
                            if(i==size){
                                break;
                            }
                            product.add(new Product(item.getString("name"),
                                    Integer.valueOf(item.getString("value"))));
                        }
                    }else{
                    }
                } catch (JSONException e) {
                    e.printStackTrace();
                }

            }

            @Override
            public void onFailure(int statusCode, Header[] headers, Throwable e, JSONObject errorResponse) {
                // handle failure here
                //Log.d("myxxx", "Code: "+ statusCode);
            }
        });
        return product;
    }
}
