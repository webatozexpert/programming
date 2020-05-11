<?php

namespace App\Http\Controllers;

use App\school;
use App\ClassName;
use App\StudentType;
use App\Student;
use Illuminate\Support\Facades\Hash;
use Auth;
use DB;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentRegistrationForm(){
    	$schools = school::where('status', '=', 1)->get();
    	$classes = ClassName::where('status', '=', 1)->get();
    	return view('admin.student.registration.registration-form',[
    		'schools' => $schools,
    		'classes' => $classes
    	]);
    }
    public function bringStudentType(Request $request){

    	$types = StudentType::where('class_id','=', $request->class_id)->get();
        $classes = ClassName::where('status', '=',1)->get();
    	return view('admin.student.registration.student-types',[
    		'types'=>$types,
            'classes'=>$classes,
            'data'=>$request
    	]);
    }
    public function batchRollForm(Request $request){
        $batches = Batch::where([
            'class_id'=>$request->class_id,
              'student_type_id'=>$request->type_id,
        ])->get();
        

        return view('admin.student.registration.batch-roll-form',[
            'batches'=>$batches
        ]);
    }
    public function studentSave(Request $request){

       $student = new Student();
       $student->student_name = $request->student_name;
       $student->school_id = $request->school_id;
       $student->class_id = $request->class_id;
       $student->father_name = $request->father_name;
       $student->father_mobile = $request->father_mobile;
       $student->father_profession = $request->father_profession;
       $student->mother_name = $request->mother_name;
       $student->mother_mobile = $request->mother_mobile;
       $student->mother_profession = $request->mother_profession;
       $student->email_address = $request->email_address;
       $student->sms_mobile = $request->sms_mobile;
       $student->date_of_admission = $request->date_of_admission;
       $student->student_photo = $request->student_photo;
       $student->address = $request->address;
       $student->status =1;
       $student->password = $request->sms_mobile;
       $student->encrypted_password = Hash::make($request->sms_mobile);
       $student->user_id = Auth::user()->id;
       $student->save();

       $studentId = $student->id;


       return back()->with('message', 'Registration Successfull !' );
    
  } 
   public function allStudentList(){

    $students = DB::table('students')
             ->join('schools','students.school_id','=','schools.id')
             ->join('class_names','students.class_id','=','class_names.id')
             ->select('students.*' ,'schools.school_name','class_names.class_name')
             ->where([

              'students.status'=>1

             ])->orderBy('students.class_id','ASC')->get();

    return view('admin.student.all-student',[
      'students'=>$students
    ]);

   }  
   public function classSelectionForm(){
    $classes = ClassName::where('status','=',1)->get();

      return view('admin.student.class.class-selection-form',[
        'classes'=>$classes
      ]);
   } 
   public function classWiseStudentType(Request $request){
    $classId = $request->class_id;
    $types = StudentType::where([
      'class_id'=>$classId,
      'status'=>1

    ])->get();

    return view('admin.student.class.student-type',[
      'types'=>$types
    ]);
   } 
}
