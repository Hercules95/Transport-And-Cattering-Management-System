<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Http\Requests;

class TransportController extends Controller
{
	public function add(Request $request) 
	{

        $id =  DB::table('transport_personal')->insertGetId(['name'=>$_POST['name'],'mobile_no'=>$_POST['mobile_no'],'address'=>$_POST['address'],'price'=>$_POST['price'],'date'=>$_POST['date'],'vantype'=>$_POST['vantype'],'passenger'=>$_POST['passenger'],'vehicleno'=>$_POST['vehicleno'],'chasisno'=>$_POST['chasisno'],'user_id'=> $request->session()->get('id')]);
            $files = json_decode($_POST['image_third']);
            foreach($files as $f):
            $new_data=explode(";",$f->url);
            $type=$new_data[0];
            $data=explode(",",$new_data[1]);
            header("Content-type:".$type);
            $codeBase = base64_decode($data[1]);
            $file_third = uniqid().".png";
            $file = file_put_contents("TransportImage/".$file_third,$codeBase);
            DB::table('transport_images')->insert(['image'=>$file_third,'t_id'=>$id]);
            endforeach;
	          DB::table('transport_facilities')->insert(['ac'=>$_POST['ac'],'luxury'=>$_POST['luxury'],'soundsystem'=>$_POST['soundsystem'],'t_id'=>$id]);
	}
	function getAdminPanel(Request $request)
	{
        $get = DB::table('transport_personal')
        ->join('transport_facilities','transport_personal.id','=','transport_facilities.t_id')
        ->select('*','transport_personal.name as tname','transport_personal.id as tid')
        ->where('user_id',$request->session()->get('id'))
         ->simplePaginate(10);
        foreach ($get as $key => $value) {
          $image = DB::table('transport_images')
          ->where('t_id',$value->tid)
          ->first();
          $value->submitted_by = $image->image;
        }
		    return $get;
	}
	 function deleteTransport($id)
      {
           	 DB::table('transport_personal')->where('id',$id)->delete();
             DB::table('transport_images')->where('id',$id)->where('t_id',$id)->delete();
             DB::table('transport_facilities')->where('id',$id)->where('t_id',$id)->delete();
      }

        function Active($id)
      {
        $get = DB::table('transport_personal')
        ->where('id',$id)
        ->update(['status' => '1']);
      }

       public function nonActive($id)
        {

        DB::table('transport_personal')->where('id',$id)->update(['status' => '0']);
       
        }

        public function gettransportManager()
        {
            
         $get = DB::table('transport_personal')
        ->join('transport_facilities','transport_personal.id','=','transport_facilities.t_id')
        ->select('*','transport_personal.name as tname','transport_personal.id as tid')
        ->get();
        foreach ($get as $key => $value) {
          $image = DB::table('transport_images')
          ->where('t_id',$value->tid)
          ->first();
          $value->submitted_by = $image->image;
        }
        return $get;

        }

         public function get()
        {
          $get = DB::table('transport_personal')
        ->join('transport_facilities','transport_personal.id','=','transport_facilities.t_id')
        ->select('*','transport_personal.name as tname','transport_personal.id as tid')
         ->where('status',1)
        ->simplePaginate(4);
        foreach ($get as $key => $value) {
          $image = DB::table('transport_images')
          ->where('t_id',$value->tid)
          ->first();
          $value->submitted_by = $image->image;
        }
        return $get;

        }
         function GetTransportFront($id)
      {





             $get = DB::table('transport_personal')
              ->join('transport_facilities','transport_personal.id','=','transport_facilities.t_id')
              ->select('*','transport_personal.name as tname','transport_personal.id as tid')
              ->where('transport_personal.id',$id)
             ->get();    

              $image = DB::table('transport_images')
              ->where('t_id',$id)
             ->get();    
             
             return view('Frontend.transport.Details',['get'=> $get,'images' =>$image]);
           
      }
}