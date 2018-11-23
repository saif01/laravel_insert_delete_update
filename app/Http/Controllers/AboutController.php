<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
   public function Contact()
   { 
   	$contact=DB::table('contacts')->get();
   	// print_r($contact);
   	// exit;
   	return view('pages.allcontact')->with('data',$contact);
   }

  public function Insert()
  {
  	return view('pages.insert');
  }

public function InsertData(Request $request)
  {
  	$data=array();
  	$data['name']=$request->name;
  	$data['email']=$request->email;
  	$data['phone']=$request->phone;
  	$data['description']=$request->description;

  	$status=DB::table('contacts')->insert($data);

  	return Redirect()->route('contact');

  	// echo "<pre>";
  	// print_r($data);
  	// exit;

  }
public function UpdateData(Request $request, $id)
 {
      $data=array();
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['phone']=$request->phone;
    $data['description']=$request->description;

    $upd=DB::table('contacts')->where('id',$id)->update($data);

    return Redirect()->route('contact');
 }







public function Delete($id)
	{
		$dlt=DB::table('contacts')->where('id',$id)->delete();
		return Redirect()->route('contact');
	}

public function Edit($id)
	{
		$edt=DB::table('contacts')->where('id',$id)->first();
		return view('pages.edit',compact('edt'));
		  // echo "<pre>";
		  // print_r($edt);
		  // exit;
	}

  public function View($id)
  {
    $view=DB::table('contacts')->where('id',$id)->first();
    return view('pages.view',compact('view'));
  }


}
