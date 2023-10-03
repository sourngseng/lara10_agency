<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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


  
  public function store(Request $request)
  {
    // return response()->json($request);
    $object_id= $request->object_id;
    $validator = Validator::make($request->all(),[
      // 'name_date' => ['name_date'],
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
        $image_name = Str::slug($request->title).'-'. uniqid().'.'. $image->getClientOriginalExtension();
        // $image_name1="abouts/".$image_name;
        $image->move(public_path('uploads/abouts'),$image_name);
      } else {
        if($request->old_image){
          $old_images=explode("/",$request->old_image);
          $image_name =$old_images[1];// $request->old_image;
        } else {
          $image_name = null;
        }
      }
      $all_data =[
        'name_date'=>$request->name_date,
        'title'=>$request->title,
        'description'=>$request->description,        
        'status'=>$status,
        'image'=>"abouts/".$image_name,
      ];
      // return response()->json($all_data);
        $datas   =   About::updateOrCreate([
        'id' => $object_id], //id ជា id របស់ table service
        $all_data);

      if($object_id){
        $type = 'update-object';
        $success = 'About has been Updated Successfully!';
      } else {
        $type = 'store-object';
        $success = 'About has been inserted Successfully!';
      }

      $response = [
        'status'  => 200,
        'type'    => $type,
        'success' => $success,
        'data'    => $datas,
        'html'    => view('admin.abouts.template.ajax_tr',[
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
      'data' => About::findOrFail($id)
    ];
    return response()->json($response);
  }

  public function show($id)
  {
    $response = [
      'data' => About::findOrFail($id)
    ];
    return response()->json($response);
  }

  public function destroy($id)
  {
   
   
    $datas = About::find($id);
    // dd($datas);
    // $datas->delete();

    $deleteImage = public_path('uploads/'.$datas->image);
    if($datas->delete()){
      if(\file_exists($deleteImage)){
        unlink($deleteImage);
      }
    }

    $response = [
      'success' => "About has been deleted successfully!",
      'data' => $datas,
    ];
    return response()->json(['success'=>'About has been deleted successfully!']);


  }

}
