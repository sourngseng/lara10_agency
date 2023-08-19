<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public $prefix = 'about_';
  public $crudRoutePath = 'abouts';

  public function index(){
    $data['title']="List All About";
    $data['abouts']=About::all();
    $data['prefix'] =$this->prefix;
    $data['crudRoutePath'] =$this->crudRoutePath;
    return view('admin.abouts.index',$data);
  }

}
