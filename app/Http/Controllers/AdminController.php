<?php

namespace App\Http\Controllers;
use App\Complain;
use App\Registration;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function  index(){
    
         $value = complain::all();
         return view("layouts.view",compact('value'));

             return view('complains.show',compact('complain'));
     }
     public function deleteinfo($id){
       $value =complain::find($id);
       $value->delete();
       $value = complain::all();

       return view("layouts.view",compact('value'));

     }
     public function show()
     {
       $data=Complain::all();

       return view('adminHome',['data'=>$data]);
     }

     public function  regadmin(){
    
         $value = registration::all();
         return view("layouts.view2",compact('value'));

             return view('registrations.show',compact('complain'));
     }

     public function deletereg($id){
       $value =registration::find($id);
       $value->delete();
       $value = registration::all();

       return view("layouts.view2",compact('value'));

     }
}
