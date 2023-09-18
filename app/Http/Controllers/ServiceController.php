<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
  public $prefix = 'service_';
  public $crudRoutePath = 'services';

  public function index()
  {

    $data['title']="List All Services";
    $data['services']=Service::all();
    $data['prefix'] =$this->prefix;
    $data['crudRoutePath'] =$this->crudRoutePath;

    // dd($data['services']);
     //ហៅ views : resources/views/admin/services/index.blade.php
    return view('admin.services.index',$data);
  }

  public function create(){
    return view('admin.services.create');
  }



  public function store(Request $request)
  {
    // return response()->json($request);
    $object_id= $request->object_id;
    $validator = Validator::make($request->all(),[
      'title' => ['required'],
      'description' => ['required'],
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
        $image->move(public_path('uploads/services/'),$image_name);
      } else {
        if($request->old_image){
          $image_name = $request->old_image;
        } else {
          $image_name = null;
        }
      }
      $all_data =[
        'title'=>$request->title,
        'description'=>$request->description,
        'status'=>$status,
        'image'=>"services/".$image_name,
      ];
      // return response()->json($all_data);
        $datas   =   Service::updateOrCreate([
        'id' => $object_id], //id ជា id របស់ table service
        $all_data);

      if($object_id){
        $type = 'update-object';
        $success = 'Service has been Updated Successfully!';
      } else {
        $type = 'store-object';
        $success = 'Service has been inserted Successfully!';
      }

      $response = [
        'status'  => 200,
        'type'    => $type,
        'success' => $success,
        'data'    => $datas,
        'html'    => view('admin.services.template.ajax_tr',[
          'row'=> $datas,
          'prefix'=>$this->prefix,
          'crudRoutePath'=> $this->crudRoutePath])
        ->render(),
      ];
      return response()->json($response);


    }

  }

  public function edit($id)
  {
    $response = [
      'data' => Service::findOrFail($id)
    ];
    return response()->json($response);
  }

  public function show($id)
  {
    $response = [
      'data' => Service::findOrFail($id)
    ];
    return response()->json($response);
  }

  public function destroy($id)
  {
    $service = Service::findOrFail($id);
    // dd($service);
    // $service->delete();
    // return redirect()->route('admin.services.index')
    //                     ->with('success','Service deleted successfully');
    $deleteImage = public_path('uploads/'.$service->image);
    if($service->delete()){
      if(\file_exists($deleteImage)){
        unlink($deleteImage);
      }
    }
    // $service->delete();
    return response()->json(['success'=>'Service has been deleted successfully!']);


  }

}
