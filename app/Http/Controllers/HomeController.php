<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('website.index');
    }
    public function login()
    {
        return view('website.auth.login');
    }
    public function register()
    {
        return view('website.auth.register');
    }
    public function travel_page()
    {
        return view('website.travel_page');
    }
    public function all_travel()
    {
        return view('website.all_travels');
    }
    public function search()
    {
        return view('website.search');
    }
    public function dashboard()
    {
        return view('website.client.client_dashboard');
    }
    public function visa_service()
    {
        return view('website.client.visa_service');
    }
    public function order_info()
    {
        return view('website.client.order_info');
    }
    public function upload_docs()
    {
        return view('website.client.upload_docs');
    }
    public function visa_orderd()
    {
        return view('website.client.visa_orderd');
    }
    public function invite_friend()
    {
        return view('website.client.invite_friend');
    }
    public function last_trip()
    {
        return view('website.client.last_trip');

   }
   public function messages()
   {
       return view('website.client.messages');

  }
  public function my_account()
  {
      return view('website.client.my_account');

 }
 public function my_fav()
  {
      return view('website.client.myFavourite');

 }
 public function my_transaction()
 {
     return view('website.client.my_transaction');

}
public function my_trip()
{
    return view('website.client.myTrip');

}
public function pink_trip()
{
    return view('website.client.pink_trip');

}
public function trip_info()
{
    return view('website.client.trip_info');

}
}
