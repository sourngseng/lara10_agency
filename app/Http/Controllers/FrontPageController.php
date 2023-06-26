<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\About;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontPageController extends Controller
{
    public function index()
    {
        // return view('home'); //ហៅ View មកបង្ហាញ ឈ្មោះ home.blade.php
        $data['services']=Service::get();
        // $servcies=DB::table('services')->get();
        $data['abouts']=About::get();
        $data['teams']=Team::get();
        $data['portfolios']=DB::table('portfolios')
                            ->join('categories','portfolios.category_id','=','categories.id')
                            ->join('clients','portfolios.client_id','=','clients.id')
                            ->select('portfolios.*','clients.name as client_name','categories.name as cat_name')
                            ->get();
                            ;
        $data['clients']=DB::table('clients')->get();
        // dd($data);
        return view('front_layouts.home',$data);
        // return view('front_layouts.home',compact('servcies'));
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



