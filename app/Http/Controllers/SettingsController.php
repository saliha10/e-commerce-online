<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
class SettingsController extends Controller
{
  public  function settings(){
   return view('/admin/settings');
  }
   public function add_settings(Request $request){
      $request->validate(
[
   'name' => 'required',
   'email'=> 'required',
   'phone'=> 'required'
]
);
   print_r($request->all())  ;   
 }
}


