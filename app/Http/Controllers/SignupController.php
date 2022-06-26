<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
 
use App\Http\Requests;

class SignupController extends Controller
{
    // public function view()
    // {
    // 	$roles = DB::table('roles')->get();
    //   return view('signup',['roles' => $roles]);

    // }
    public function submit()
    {
            $string = $_POST['file'];
            $new_data=explode(";",$string);
            $type=$new_data[0];
            $data=explode(",",$new_data[1]);
            header("Content-type:".$type);
            $codeBase = base64_decode($data[1]);
            $fileName = uniqid().".png";
            $file = file_put_contents("userimages/".$fileName,$codeBase);
               

    	 DB::table('user')->insert(['username' =>$_POST['username'],'email'=>$_POST['email'],'password' => $_POST['password'],'image'=>$fileName]);
         

    }
    // public function getroles()
    // {
    // 	$data = DB::table('roles')->get();
    // 	return response()->json($data);
    // }
    
}
