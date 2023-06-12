<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
class FrontPageController extends Controller
{
    public function index()
    {
        // return view('home'); //ហៅ View មកបង្ហាញ ឈ្មោះ home.blade.php
        $data['services']=Service::get();
        // dd($data);
        return view('front_layouts.home',$data);
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



