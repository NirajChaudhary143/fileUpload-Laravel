<?php

namespace App\Http\Controllers;
use App\Models\FileUpload;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function index(){
        return view('index');
    }
    public function store(Request $request){
        $requestData = $request->all();
        $fileName = time().'-niraj.'.$request->file('image')->getClientOriginalExtension();
        $path =$request->file('image')->storeAs('uploads',$fileName,'public');
        // $requestData['email']=$request->input('email');
        $requestData['image']='/storage/'.$path;
        FileUpload::create($requestData);

        return redirect('/display');

    }

    public function display(){
        $data = FileUpload::all();
        return view('display',compact('data'));
    }
}
