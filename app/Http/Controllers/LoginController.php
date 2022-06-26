<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Http\Requests;
 
class LoginController extends Controller
{
	 

	 public function login()
	 {
	 	$rules = array(

	 	 'username' => 'required|min:4|unique:users,username',
   		// 'email'    => 'email|unique:users,email',
   		 'password' => 'min:6'
   		 );
	 	 

	 	$username = $_POST['username'];
	 	$password = $_POST['password'];
	 	//$role = $_POST['role_id'];

	 	 


	 	$check = DB::table('user')
	 					->where('username',$username)
	 					->where('password',$password);
	 					// ->where('role_id',$role); 
	 					


       if($check->count() > 0 ){

          $data = $check->first();
         
      		
         $s=  session(['username'=> $data->username,'role_id' => $data->role_id,'id' => $data->id,'image'=>$data->image]);

         
            return redirect('/Home');
        
          
            
            

       }
       return $check->count();


      
	 }
	  function sessiontest(Request $request)
    {
      $data = $request->session()->all();
      return $data;
      
    }
     public function Logout(){
     	
        session()->flush();
        return redirect('/Home');
      
    }

}
