<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FrontPageController extends Controller
{
    public function index()
    {
        return view('home'); //ហៅ View មកបង្ហាញ ឈ្មោះ home.blade.php
    }
    public function contact()
    {
        $name="Long Dara";
        $phone="093 77 12 44";
        //ហៅ View មកបង្ហាញ ឈ្មោះ contact.blade.php
        return view('contact',compact('name','phone'));
    }
    public function about()
    {
        return view('about');   //ហៅ View មកបង្ហាញ ឈ្មោះ about.blade.php
    }

}



