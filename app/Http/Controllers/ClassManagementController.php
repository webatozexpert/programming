<?php

namespace App\Http\Controllers;

use App\school;
use App\ClassName;
use Illuminate\Http\Request;

class ClassManagementController extends Controller
{
    public function addClassform(){
        return view('admin.setting.class.add-form');
    }
    public function classSave(Request $request){
        $this->validate($request,[
            'class_name'=>'required|string'
        ]);

        $data = new ClassName();
        $data->class_name = $request->class_name;
        $data->status =1;
        $data->save();
        return back()->with('message','Class added Successfully');

    }
    public function classList(){
        $classes = ClassName::all();
        return view('admin.setting.class.list',[
            'classes'=>$classes
        ]);
    }
    public function classUnpublished($id){
        $class = ClassName::find($id);
        $class->status = 2;
    $class->save();
        return redirect('/class-list')-> with('message','Class unpublished Successfully');
    }

    public function classPublished($id){
        $class = ClassName::find($id);
        $class->status = 1;
        $class->save();
        return redirect('/class-list')-> with('message','Class Published Successfully');
    }
    public function classEditform($id){
        $class = ClassName::find($id);
        return view('admin.setting.class.edit-form',[
            'class'=>$class
        ]);
    }
    public function classUpdate(Request $request){
        $this->validate($request,[
            'class_name'=>'required|string'
        ]);

        $data =  ClassName::find($request->class_id);
        $data->class_name = $request->class_name;
        $data->save();

        return redirect('/class-list')-> with('message','Class Name Updated Successfully');

    }

    public function classDelete($id){
        $class = ClassName::find($id);
        $class->delete();
        return redirect('/class-list')-> with('message','Class Name Deleted Successfully');
    }
}
