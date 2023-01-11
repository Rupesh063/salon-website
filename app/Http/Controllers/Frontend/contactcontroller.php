<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class contactcontroller extends Controller
{
    public function index ()
    {
        return view('frontened.contact');
    }
public function contact(Request $request)
{
    $request->validate(
      [
            'uname'=> 'required',
          'uemail'=> 'required|email',
          'usubject'=>'required',
            'utextarea'=> 'required_without:usubject',
        ]
    );
    echo "<pre>";
    print_r($request->all());
 
{
    $obj=new Contact();
    $obj->name=$request->uname;
    $obj->email=$request->uemail;
    $obj->subject=$request->usubject;
    $obj->textarea=$request->utextarea;
    $obj->save();

    return redirect ('contact')->with('report','Inserted Successfully');
}
}
}
