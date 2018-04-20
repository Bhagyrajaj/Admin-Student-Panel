<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Admins;
use Validator;
use Redirect;
use DB;
use Session;

class admincontroller extends Controller
{
   public function admin_login(){
	return view('admin.adminlogin');	
	}
	
	public function admin_login_submit(){
	$adminname=input::get('adminname');	
	$adminpassword=input::get('adminpassword');
	$login_check = admins::login_check($adminname,$adminpassword);
	if ($login_check>0){
		return Redirect::to('admin_profile');
	}else{
		return Redirect::to('admin_login')->with('msg','Invalid Login Credantials');
}	
		
	}
	
	public function admin_logout(){
		Session::forget('id');
		return Redirect::to('admin_login')->with('msg','Logged Out Successfully'); 

	}
	
	public function admin_profile(){
		return view('admin.adminprofile');
	}
	
	public function admin_post(){
		return view('admin.adminpost');
	}
}
