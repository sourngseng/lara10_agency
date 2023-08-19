<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
  public $prefix = 'team_';
  public $crudRoutePath = 'teams';


  public function index(){

    $data['title']="List All Teams";
    $data['teams']=Team::all();
    $data['prefix'] =$this->prefix;
    $data['crudRoutePath'] =$this->crudRoutePath;

    return view('admin.teams.index',$data);

  }






}
