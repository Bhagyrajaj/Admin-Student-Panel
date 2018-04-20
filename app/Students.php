<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Students extends Model
{
    protected $table='student';
	
	public static function student_insert($data){
		return DB::table('student')->insert($data);
	}
	public static function login_check($studentname,$password){
		$return = DB::table('student')->where('email','=',$studentname)->where('password','=',$password)->get();
				
		$count = count($return);
		if($count >0){
			Session::put('student_id',$return[0]->student_id);
			Session::put('email',$return[0]->email);
			return 1;
			
		}
		else{
			return 0;
		}
	}
	
	public static function edit($id){
		return DB::table('student')->where('student_id','=',$id)->get();
	} 
	public static function student_update($data,$id){
		return DB::table('student')->where('student_id','=',$id)->update($data);
	}
}
