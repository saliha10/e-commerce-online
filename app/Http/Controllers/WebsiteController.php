<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Product;
use App\Models\Home;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    function home(){
        $home=Home::all()->toArray();
        $products=Product::all()->toArray();
        $services=Service::all()->toArray();
       return view('home')->with(['home'=> $home, 'products' => $products ,'services' => $services]);
    }

    function smartwatch(){
        $services = Service::all()->toArray();
        return view('smartwatch')->with('services', $services);
     }

    function about(){
        return view('about');
    }

    function payment(){
        return view('payment');
    }

    function men(){
        return view('men');
    }

    function women(){
        return view('women');
    }

    function cart(){
        return view('cart');
    }

    function product(){
        return view('product');
    }



    function complete(){
        return view('complete');
    }

    function Shopping(){
        $products = product::all();
        return view('Shopping', compact('products'));
    }

    function dashboard(){

        return view('admintemplate');
    }
}