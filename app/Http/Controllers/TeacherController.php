<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
  public $prefix="teacher_";
  public $crudRoutePath="teachers";
  public function index()
  {
    $data['teachers'] = Teacher::all();
    $data['prefix'] =$this->prefix;
    $data['crudRoutePath'] =$this->crudRoutePath;
    return view('teachers.index',$data);
  }

  public function store(Request $request)
  {
    // return response()->json($request);
    $object_id= $request->object_id;
    $validator = Validator::make($request->all(),[
      'first_name' => ['required'],
      'last_name' => ['required'],
    ]);
    if($validator->fails()){
      $response = [
        'status' => 400,
        'error'  => $validator->errors()->toArray()
      ];
      return response()->json($response);
    } else {

      if($request->is_active){
        $is_active = true;
      } else {
        $is_active = false;
      }
      if($request->hasFile('profile')){
        $image = $request->file('profile');
        $image_name = "teacher/". Str::slug($request->first_name).'-'. uniqid().'.'. $image->getClientOriginalExtension();
        $image->move(public_path('uploads/teacher'),$image_name);
      } else {
        if($request->old_image){
          $image_name = $request->old_image;
        } else {
          $image_name = null;
        }
      }
      $all_data =[
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'gender'=>$request->gender,
        'phone'=>$request->phone,
        'is_active'=>$is_active,
        'profile'=>$image_name,
      ];
      // return response()->json($all_data);
        $datas   =   Teacher::updateOrCreate([
        'id' => $object_id], //id ជា id របស់ table customers
        $all_data);

      if($object_id){
        $type = 'update-object';
        $success = 'Teacher has been Updated Successfully!';
      } else {
        $type = 'store-object';
        $success = 'Teacher has been inserted Successfully!';
      }

      $response = [
        'status'  => 200,
        'type'    => $type,
        'success' => $success,
        'data'    => $datas,
        'html'    => view('teachers.templates.ajax_tr',[
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
      'data' => Teacher::findOrFail($id)
    ];
    return response()->json($response);
  }

  public function show($id)
  {
    $response = [
      'data' => Teacher::findOrFail($id)
    ];
    return response()->json($response);
  }

  public function destroy($id)
  {
    $teacher = Teacher::findOrFail($id);
    $deleteImage = public_path('uploads/'.$teacher->profile);
    if($teacher->delete()){
      if(\file_exists($deleteImage)){
        unlink($deleteImage);
      }
    }
    return response()->json(['success'=>'Teacher has been deleted successfully!']);
  }

}
