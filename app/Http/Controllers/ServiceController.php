<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

  public function index()
  {

    $data['title']="List All Services";
    $data['services']=Service::all();

    // dd($data['services']);
     //ហៅ views : resources/views/admin/services/index.blade.php
    return view('admin.services.index',$data);
  }

  public function create(){
    return view('admin.services.create');
  }

}
