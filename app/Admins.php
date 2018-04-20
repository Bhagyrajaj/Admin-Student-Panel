<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Admins extends Model
{
     protected $table='adminlogin';
	
	public static function login_check($adminname,$adminpassword){
		$return = DB::table('adminlogin')->where('admin_name','=',$adminname)->where('admin_password','=',$adminpassword)->get();
				
		$count = count($return);
		if($count >0){
			Session::put('id',$return[0]->id);
			Session::put('adminname',$return[0]->admin_name);
			return 1;
			
		}
		else{
			return 0;
		}
	}
}
