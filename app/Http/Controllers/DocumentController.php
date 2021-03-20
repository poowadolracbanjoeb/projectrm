<?php

namespace App\Http\Controllers;

use App\Documents;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function create(){
       return view('admin.document.create');
    }

    public function store(Request $request){
        $data=new Documents;
        if($request->file('file')){
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/', $filename);
            $data->file= $filename;
        }
        $data->title=$request->title;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
    public function index(){
        $file=Documents::all();
        return view('admin.document.view',compact('file'));
    }



    public function show($id){
         $data=Documents::find($id);
         return view('admin.document.details',compact('data'));
    }




    public function download($file){
          return response()->download('storage/'.$file);
    }
  
}
