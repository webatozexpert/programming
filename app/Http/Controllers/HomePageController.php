<?php

namespace App\Http\Controllers;
use App\HeaderFooter;
use DB;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function addHeaderFooterForm(){
        $headerFooter = DB::table('header_footers')->first();
        if(isset($headerFooter)){
            return view('admin.home.manage-header-footer-form',[
                'headerFooter' => $headerFooter
            ]);
        }else{
            return view('admin.home.add-header-footer-form');
        }

    }
    public function headerAndFooterSave(Request $request){
       $this->headerFooterValidation($request);

        $data = new HeaderFooter();
    $data->title_name = $request->title_name;
    $data->sub_title = $request->sub_title;
    $data->address = $request->address;
    $data->mobile = $request->mobile;
    $data->copyright = $request->copyright;
    $data->status = $request->status;
    $data->save();

    return redirect('/home')->with('message','header & footer save successfully');
    }

    public function manageHeaderFooter($id){
        $headerFooter = HeaderFooter::find($id);
        return view('admin.home.manage-header-footer-form',[
            'headerFooter' => $headerFooter
        ]);
    }
    public function headerAndFooterUpdate(Request $request){
        $this->headerFooterValidation($request);
        $headerFooter = HeaderFooter::find($request->id);
        $headerFooter->title_name = $request->title_name;
        $headerFooter->sub_title = $request->sub_title;
        $headerFooter->address = $request->address;
        $headerFooter->mobile = $request->mobile;
        $headerFooter->copyright = $request->copyright;
        $headerFooter->save();

        return redirect('/home')->with('message','Header & Footer Update Successfully');
    }
    protected function headerFooterValidation($request){
        $this->validate($request,[
            'title_name'=>'required',
            'sub_title'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'copyright'=>'required',

        ]);
    }
}
