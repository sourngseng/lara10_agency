<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
  public $prefix = 'customer_';

  public $crudRoutePath = 'customers';

  public function index()
  {
    $data['customers'] = Customer::all();
    $data['prefix'] =$this->prefix;
    $data['crudRoutePath'] =$this->crudRoutePath;
    return view('customers.index',$data);
  }

  public function store(Request $request)
  {
    // return response()->json($request);
    $object_id= $request->object_id;
    $validator = Validator::make($request->all(),[
      'fname' => ['required'],
      'lname' => ['required'],
    ]);
    if($validator->fails()){
      $response = [
        'status' => 400,
        'error'  => $validator->errors()->toArray()
      ];
      return response()->json($response);
    } else {

      // if($request->status){
      //   $status = true;
      // } else {
      //   $status = false;
      // }
      if($request->hasFile('profile')){
        $image = $request->file('profile');
        $image_name = Str::slug($request->fname).'-'. uniqid().'.'. $image->getClientOriginalExtension();
        $image->move(public_path('uploads/customer/'),$image_name);
      } else {
        if($request->old_image){
          $image_name = $request->old_image;
        } else {
          $image_name = null;
        }
      }
      $all_data =[
        'fname'=>$request->fname,
        'lname'=>$request->lname,
        'email'=>$request->email,
        'profile'=>$image_name,
      ];
      // return response()->json($all_data);
        $datas   =   Customer::updateOrCreate([
        'id' => $object_id], //id ជា id របស់ table customers
        $all_data);

      if($object_id){
        $type = 'update-object';
        $success = 'Customer has been Updated Successfully!';
      } else {
        $type = 'store-object';
        $success = 'Customer has been inserted Successfully!';
      }

      $response = [
        'status'  => 200,
        'type'    => $type,
        'success' => $success,
        'data'    => $datas,
        'html'    => view('customers.templates.ajax_tr',[
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
      'data' => Customer::findOrFail($id)
    ];
    return response()->json($response);
  }

  public function show($id)
  {
    $response = [
      'data' => Customer::findOrFail($id)
    ];
    return response()->json($response);
  }

  public function destroy($id)
  {
    $customer = Customer::findOrFail($id);
    $deleteImage = public_path('uploads/customer/'.$customer->profile);
    if($customer->delete()){
      if(\file_exists($deleteImage)){
        unlink($deleteImage);
      }
    }
    return response()->json(['success'=>'Customer has been deleted successfully!']);
  }
}
