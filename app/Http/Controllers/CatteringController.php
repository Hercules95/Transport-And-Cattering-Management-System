<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Http\Requests;

class CatteringController extends Controller
{
	public function add(Request $request)
	{
		$string = $_POST['shop_image'];
            $new_data=explode(";",$string);
            $type=$new_data[0];
            $data=explode(",",$new_data[1]);
            header("Content-type:".$type);
            $codeBase = base64_decode($data[1]);
            $fileName = uniqid().".png";
            $file = file_put_contents("CatteringShopImages/".$fileName,$codeBase);


            $string = $_POST['desserts'];
            $new_data=explode(";",$string); 
            $type=$new_data[0];
            $data=explode(",",$new_data[1]);
            header("Content-type:".$type);
            $codeBase = base64_decode($data[1]);
            $fileName_image = uniqid().".png";
            $file = file_put_contents("CatteringShopImages/".$fileName_image,$codeBase);

	$id =	DB::table('catering')->insertGetId(['name'=>$_POST['name'],'address' =>$_POST['address'],'price'=>$_POST['price'],'mobileno'=>$_POST['mobileno'],'date'=>$_POST['date'],'capacity'=>$_POST['capacity'],'shop_image'=>$fileName,'user_id'=> $request->session()->get('id')]);
		DB::table('cattering_menu')->insert(['image'=>$fileName_image,'cattering_id'=>$id]);
	}
      public function get()
      {
            $get = DB::table('catering')
            ->join('cattering_menu','catering.id','=','cattering_menu.id')
            ->select('*','catering.name as cname')
            ->where('status',1)
            ->simplePaginate(4);
            return $get;
          
      }

      public function get_backend(Request $request)
      {
            
             $get = DB::table('catering')
            ->join('cattering_menu','catering.id','=','cattering_menu.id')
            ->select('*','catering.name as cname')
            ->where('user_id',$request->session()->get('id'))
            ->simplePaginate(4);
            return $get;
          
      }
       function deleteCatering($id)
      {
             DB::table('catering')->where('id',$id)->delete();
             DB::table('cattering_menu')->where('id',$id)
             ->where('cattering_id',$id)
             ->delete();
      }
       function GetCateringFront($id)
      {
             $get = DB::table('catering')
            ->join('cattering_menu','catering.id','=','cattering_menu.id')
              ->where('catering.id',$id)
             ->get();    
  
              return view('frontend.Cattering.detail',['get'=> $get]);
              
           
      }
       public function GetManager()
      {
            $get = DB::table('catering')
            ->join('cattering_menu','catering.id','=','cattering_menu.id')
            ->select('*','catering.name as cname')
            ->get();
             return $get;

      }
      function Active($id)
      {
        $get = DB::table('catering')
        ->where('id',$id)
        ->update(['status' => '1']);
      }

       public function nonActive($id)
        {
        DB::table('catering')->where('id',$id)->update(['status' => '0']);
       
        }
        function deleteFarmsManager($id)
      {
             DB::table('catering')->where('id',$id)->delete();
             DB::table('cattering_menu')->where('id',$id)->delete();
      }


} 