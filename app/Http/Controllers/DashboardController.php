<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;




class DashboardController extends Controller
{
    public function display(){
        $contacts=Contact::all();
        return view('dashboard',compact('contacts'));
    }
   
public function show(){
    $contacts=Contact::all();
        return view('frontened.layouts.view-data',compact('contacts'));
}

public function get($id){
    $contacts=Contact::find($id);
    $contacts = [$contacts];
        return view('frontened.layouts.view-data',compact('contacts'));
}

public function Edit($id){
    $contacts=Contact::where('id','=',$id)->first();
        return view('frontened.layouts.edit',compact('contacts'));
}
public function update(Request $request,Contact $contacts)
{
    $request->validate(
      [
            'uname'=> 'required',
          'uemail'=> 'required|email',
          'usubject'=>'required',
            'utextarea'=> 'required_without:usubject',
        ]);
    $id=$request->id;
    $name=$request->uname;
    $email=$request->uemail;
    $subject=$request->usubject;
    $textarea=$request->utextarea;
    
    contact::where('id','=',$id)->update([
        'name'=>$name,
        'email'=>$email,
        'subject'=>$subject,
        'textarea'=>$textarea,
        
    ]);
{
    return redirect ('dashboard')->with('report','Updated Successfully');
}
}
public function delete($id){
    $contacts=contact::where('id','=',$id)->delete();
    return redirect ('dashboard')->with('report','deleted Successfully');

}
}