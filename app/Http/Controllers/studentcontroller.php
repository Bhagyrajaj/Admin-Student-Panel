<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Students;
use Validator;
use Redirect;
use DB;
use Session;

class studentcontroller extends Controller
{
	
    public function student_register(){
	return view('student.studentregister');	
	}
	
	public function stu_reg_submit(Request $request){
		$validation=Validator::make($request->all(),[
		'studentname'=>'required',
		'email'=>'required',
		'dob'=>'required',
		'gender'=>'required',
		'mobile'=>'required',
		'image'=>'required',
		'password'=>'required|min:6',
		'confirmpassword'=>'required|same:password',
		]);
		if($validation->fails()){
			return redirect::back()->withErrors($validation->errors())->withinput($request->all());
		}
		
		$image = input::file('image'); 
		$filename = $image->getClientOriginalname();
		$path = 'profile';
		$move = $image->move($path,$filename);
	
		
	$data = array('studentname' => input::get('studentname'),
					'email' => input::get('email'),
					'dob' => input::get('dob'),
					'gender' => input::get('gender'),
					'mobile' => input::get('mobile'),
					'image' => $filename,
					'password' => input::get('password'),
					'confirmpassword' => input::get('confirmpassword'));
		students::student_insert($data);
		return Redirect::to('student_login');
		
	}
	
	public function check_email(){
		$email=input::get('email_id');
		$check_email=DB::table('student')->where('email',$email)->count();
		echo $check_email;
		
	}
	
	public function stu_update(Request $request){
		if(Session::has('student_id')){
			
			$id=Session::get('student_id');
			
			
		$validation=Validator::make($request->all(),[
		'studentname'=>'required',
		'email'=>'required',
		'dob'=>'required',
		'gender'=>'required',
		'mobile'=>'required',
		//'image'=>'required',
		'password'=>'required|min:6',
		'confirmpassword'=>'required|same:password',
		]);
		if($validation->fails()){
			return redirect::back()->withErrors($validation->errors())->withinput($request->all());
		}
		
		$image = input::file('image'); 
		if($image !=""){
		$image = input::file('image'); 
		$filename = $image->getClientOriginalname();
		$path = 'profile';
		$move = $image->move($path,$filename);
		}else{
			$filename = input::get('image1');
		}
		
		
	$data = array('studentname' => input::get('studentname'),
					'email' => input::get('email'),
					'dob' => input::get('dob'),
					'gender' => input::get('gender'),
					'mobile' => input::get('mobile'),
					'image' => $filename,
					'password' => input::get('password'),
					'confirmpassword' => input::get('confirmpassword'));
					
		students::student_update($data,$id);
		return Redirect::to('student_profile');
		}else{
			return Redirect::to('student_login');
		}
	}
	
	public function student_login(){
	return view('student.login');	
	}
	public function stu_login_check(){
	$studentname=input::get('studentname');	
	$password=input::get('password');
	$login_check = students::login_check($studentname,$password);
	if ($login_check>0){
		return Redirect::to('student_profile');
	}else{
		return Redirect::to('student_login')->with('msg','Invalid Login Credantials');
}	
		
	}
	
	
	public function student_profile(){
		if(Session::has('student_id')){
			$id=Session::get('student_id');
			$pass = students::edit($id);
			$job_details=DB::table('job')->get();
			
			return view('student.profile')->with('pass',$pass)->with('job_details',$job_details);	
		}else{
			return Redirect::to('student_login');
		}
		
	}
	
	public function student_logout(){
		Session::forget('student_id');
		return Redirect::to('student_login')->with('msg','Logged Out Successfully'); 
	}	
	public function student_post(){
	return view('student.post');	
	}
	
	public function post_submit(){
		$date=date('Y-m-d H:i:s');
		
		$data = array('post_name' => input::get('post_name'),
					'des' => input::get('des'),
					'qualification' => input::get('qualification'),
					//'gender' => input::get('gender'),
					'company_name' => input::get('company_name'),
					'email' => input::get('email'),
					//'email' => $filename,
					'date' => $date,
					//'confirmpassword' => input::get('confirmpassword')
					);
		DB::table('job')->insert($data);
		return Redirect::to('admin_profile')->with('msg','Posted Successfully');
	}
}
