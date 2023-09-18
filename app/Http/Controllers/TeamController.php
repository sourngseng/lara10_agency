<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

  public function create(){
    return view('admin.teams.modal.create');
  }

  public function store(Request $request)
  {
    // return response()->json($request);
    $object_id= $request->object_id;
    $validator = Validator::make($request->all(),[
      'name' => ['required'],
      'position' => ['required'],
    ]);
    if($validator->fails()){
      $response = [
        'status' => 400,
        'error'  => $validator->errors()->toArray()
      ];
      return response()->json($response);
    } else {

      if($request->status){
        $status = true;
      } else {
        $status = false;
      }


      if($request->hasFile('profile')){
        $image = $request->file('profile');
        $image_name = Str::slug($request->fname).'-'. uniqid().'.'. $image->getClientOriginalExtension();
        $image->move(public_path('uploads/teams/'),$image_name);
      } else {
        if($request->old_image){
          $image_name = $request->old_image;
        } else {
          $image_name = null;
        }
      }

      $all_data =[
        'name'=>$request->name,
        'position'=>$request->position,
        'facebook'=>$request->facebook,
        'twitter'=>$request->twitter,
        'linkedin'=>$request->linkedin,
        'status'=>$status,
        'image'=>"teams/".$image_name,
      ];
      // return response()->json($all_data);
        $datas   =   Team::updateOrCreate([
        'id' => $object_id], //id ជា id របស់ table service
        $all_data);

      if($object_id){
        $type = 'update-object';
        $success = 'Team has been Updated Successfully!';
      } else {
        $type = 'store-object';
        $success = 'Team has been inserted Successfully!';
      }

      $response = [
        'status'  => 200,
        'type'    => $type,
        'success' => $success,
        'data'    => $datas,
        'html'    => view('admin.teams.template.ajax_tr',[
          'row'=> $datas,
          'prefix'=>$this->prefix,
          'crudRoutePath'=> $this->crudRoutePath])
        ->render(),
      ];
      return response()->json($response);


    }

  }




}
