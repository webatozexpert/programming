<?php

namespace App\Http\Controllers;

use App\Batch;
use App\ClassName;
use DB;


use Illuminate\Http\Request;

class BatchManagementController extends Controller
{
    public function addBatch(){
      $data=DB::table('class_names')->get();

      return view('admin.setting.batch.add-form',compact('data'));

    }


public function classWiseStudentType(Request $request){

  $types = StudentType::where([
    'class_id'=>$request->class_id
  ])->where('status','!=',3)->get();
  
   return view('admin.setting.batch.class-wise-student-type',[
    'types' => $types

   ]);
}


    public function batchSave(Request $request){
        $this->validate($request,[
           'class_id'=>'required',
            'student_type_id'=>'required',
           'batch_name'=>'required|string',
           'student_capacity'=>'required',
        ]);

        $data = new Batch();

        $data->class_id = $request->class_id;
        $data->student_type_id = $request->student_type_id;
        $data->batch_name = $request->batch_name;
        $data->student_capacity = $request->student_capacity;
        $data->status = 1 ;
        $data->save();
        return back()->with('message','Batch added Successfully');
    }

    public function batchList(){
      $data=DB::table('class_names')->get();
      return view('admin.setting.batch.batch-list',compact('data'));


    }
    public function batchListByAjax(Request $request){
      $batches = Batch::where([
        'class_id'=>$request->class_id,
        'student_type_id'=>$request->type_id,
      ])->where('status','!=',3)->get();
      
      if(count($batches)>0){
        return view('admin.setting.batch.batch_list_by_ajax',[
          'batches' =>'$batches'
        ]);
      }else{
        return view('admin.setting.batch.batch_empty_error');
      }

    }
   

}
