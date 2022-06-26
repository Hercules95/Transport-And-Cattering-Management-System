<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Http\Requests;

class FarmController extends Controller
{
	public function Add(Request $request)
	{
		         $id = DB::table('farm_personal')->insertGetId(['name' => $_POST['name'],'mobileno'=>$_POST['mobileno'],'address'=>$_POST['address'],'bed'=>$_POST['bed'],'room'=>$_POST['room'],'Detail_info'=>$_POST['Detail_info'],'from_Date'=>$_POST['from_Date'],'to_Date'=>$_POST['to_Date'],'washroom'=>$_POST['washroom'],'price'=>$_POST['price'],'capacity'=>$_POST['capacity'],'facilities'=>$_POST['facilities'],'user_id'=> $request->session()->get('id')]);

            $files = json_decode($_POST['image_one']);
            foreach($files as $f):
            $new_data=explode(";",$f->url);
            $type=$new_data[0];
            $data=explode(",",$new_data[1]);
            header("Content-type:".$type);
            $codeBase = base64_decode($data[1]);
            $file_third = uniqid().".png";
            $file = file_put_contents("FarmHouseImages/".$file_third,$codeBase);
            DB::table('images')->insert(['image_one'=>$file_third,'f_id'=>$id]);
            endforeach;
	}
      public function Get()
      {
               $get = DB::table('farm_personal')
        ->select('*','farm_personal.name as fname','farm_personal.id as farmid')
        ->where('status',1)
        ->simplePaginate(4);
        foreach ($get as $key => $value) {
          $image = DB::table('images')
         ->where('f_id',$value->farmid)
         ->first();
            $value->submitted_by = $image->image_one;
         }
         return $get; 
      }
        public function GetManage(Request $request)
      {
             $get = DB::table('farm_personal')
        ->select('*','farm_personal.name as fname','farm_personal.id as farmid')
        ->where('user_id',$request->session()->get('id'))
        ->simplePaginate(10);
        foreach ($get as $key => $value) {
          $image = DB::table('images')
         ->where('f_id',$value->farmid)
         ->first();
            $value->submitted_by = $image->image_one;
         }
         return $get; 
      }
      function deleteFarms($id)
      {
             DB::table('farm_personal')->where('id',$id)->delete();
             DB::table('images')
             ->where('f_id',$id)
             ->delete();
      }
       function GetFarmsFront($id)
      {
              $get = DB::table('farm_personal')
              ->where('farm_personal.id',$id)
             ->get();    
               $image = DB::table('images')
              ->where('f_id',$id)
             ->get();
              $facilities = explode(',',$get[0]->facilities);
             return view('Frontend.FarmHouse.Details',['get'=> $get,'fact'=>$facilities,'farmimage'=>$image]);
           
      }
      // Manager
      public function GetManager()
      {
             $get = DB::table('farm_personal')
        ->select('*','farm_personal.name as fname','farm_personal.id as farmid')
        ->get();
        foreach ($get as $key => $value) {
          $image = DB::table('images')
         ->where('f_id',$value->farmid)
         ->first();
            $value->submitted_by = $image->image_one;
         }
         return $get; 
      }
      function Active($id)
      {
        $get = DB::table('farm_personal')
        ->where('id',$id)
        ->update(['status' => '1']);
      }

       public function nonActive($id)
        {
        DB::table('farm_personal')->where('id',$id)->update(['status' => '0']);
       
        }
        function deleteFarmsManager($id)
      {
             DB::table('farm_personal')->where('id',$id)->delete();
             DB::table('images')
             ->where('f_id',$id)
             ->delete();
      }
      // Catering ,farm house and transport counting.
      function count(Request $request)
      {
        $get= DB::table('farm_personal')
          ->where('user_id',$request->session()->get('id'))
        ->count();
        $active= DB::table('farm_personal')
          ->where('user_id',$request->session()->get('id'))
        ->where('status',1)
        ->count();
        $nonactive= DB::table('farm_personal')
         ->where('user_id',$request->session()->get('id'))
        ->where('status',0)
        ->count();
             


        $getCatering= DB::table('catering')
         ->where('user_id',$request->session()->get('id'))
        ->count();

        $activeCatering= DB::table('catering')
         ->where('user_id',$request->session()->get('id'))
        ->where('status',1)
        ->count();
        $nonactiveCatering= DB::table('catering')
         ->where('user_id',$request->session()->get('id'))
        ->where('status',0)
        ->count();


        $gettransport= DB::table('transport_personal')
          ->where('user_id',$request->session()->get('id'))
        ->count();
        $activetransport= DB::table('transport_personal')
          ->where('user_id',$request->session()->get('id'))
        ->where('status',1)
        ->count();
        $nonactivetransport= DB::table('transport_personal')
          ->where('user_id',$request->session()->get('id'))
        ->where('status',0)
        ->count();



// Admin counting
        $getadmin= DB::table('farm_personal')
        ->count();
        $activeadmin= DB::table('farm_personal')
        ->where('status',1)
        ->count();
        $nonactiveadmin= DB::table('farm_personal')
        ->where('status',0)
        ->count();



        $getCateringadmin= DB::table('catering')
        ->count();
        $activeCateringadmin= DB::table('catering')
        ->where('status',1)
        ->count();
        $nonactiveCateringadmin= DB::table('catering')
        ->where('status',0)
        ->count();


        $gettransportadmin= DB::table('transport_personal')
        ->count();
        $activetransportadmin= DB::table('transport_personal')
        ->where('status',1)
        ->count();
        $nonactivetransportadmin= DB::table('transport_personal')
        ->where('status',0)
        ->count();



        return view('AdminPanel.home',['countadmin' => $getadmin,'activeadmin' => $activeadmin,'nonactivefarmadmin' => $nonactiveadmin,'getCateringadmin' => $getCateringadmin,'activeCateringadmin' => $activeCateringadmin,'nonactiveCateringadmin' => $nonactiveCateringadmin,'counttransportadmin' => $gettransportadmin,'activetransportadmin' => $activetransportadmin,'nonactiveadmin' =>$nonactivetransportadmin,'count' => $get,'active' => $active,'nonactivefarm' => $nonactive,'getCatering' => $getCatering,'activeCatering' => $activeCatering,'nonactiveCatering' => $nonactiveCatering,'counttransport' => $gettransport,'activetransport' => $activetransport,'nonactive' =>$nonactivetransport]);
      }

      function recent()
      {
         $farm = DB::table('farm_personal')
            ->join('images','farm_personal.id','=','images.f_id')
             ->orderBy('farmid','desc')
            ->where('status',1)
            ->select('*','farm_personal.id as farmid','farm_personal.name as fname')
            ->first();

        $catering =DB::table('catering')
        ->orderBy('id','desc')
       ->where('status',1)
        ->select('*')
        ->first();


        $transport = DB::table('transport_personal')
        ->join('transport_images','transport_personal.id','=','t_id')
        ->select('*','transport_personal.name as tname','transport_personal.id as tid')
        ->orderBy('tid','desc')
        ->where('status',1)
        ->first();
       
        return view('frontend.home',['fa'=>$farm,'cat'=>$catering,'tran' =>$transport]);
      
       

      }
      function avg()
      {
        $g= DB::table('farm_personal')
                ->avg('status',1);
                print_r($g);
      }

}