<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
	public function Search($id,$date)
	{
		//  $query = 'd';
		//  $mob = '03';
		// $get = DB::table('farm_personal')
		// ->where('name','LIKE','%'.$query.'%')
		// ->orWhere('mobileno','LIKE','%'.$mob.'%')
		// ->get(); 
		// return json_encode($get);
		
		// $data= DB::table('farm_personal')
		// ->where('name','LIKE','%'.$id.'%')
		// >where('from_Date',$date)
		// ->get();
		// $catering = DB::table('catering')
		// ->where('name','LIKE','%'.$id.'%')
		// ->get();
		echo $id;
		echo $date;
	}
}