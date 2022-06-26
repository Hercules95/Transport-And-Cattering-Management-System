<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 
use Illuminate\Http\Request;

Route::get('/',function(){
    return view('login');
});
Route::get('/Logout','loginController@Logout');

Route::get('/Search/{id}/{date}','SearchController@Search');

Route::get('/signup',function(){
	return view('signup');
});

Route::get('/avg','FarmController@avg');


Route::get('/roles/get','SignupController@getroles');

Route::post('/signup/submit','SignupController@submit');

Route::post('/l','loginController@login');
// Route::get('/newsignup',function(){
//     return view('newsignup');
// });
Route::get('/ContactUs',function(){
	return view('frontend.contact');
});

Route::get('/AboutUs',function(){
	return view('frontend.aboutus');
});
Route::get('/Faqs',function(){
	return view('frontend.faqs');
});

Route::get('/Home','FarmController@recent');

// Frotent FarmHouse
Route::get('/FarmHouse/Add',function(){
	return view('AdminPanel.farmhouse.add');
});

Route::get('/FarmHouse/Manage',function(){
	return view('AdminPanel.farmhouse.manage');
});
Route::get('/FarmHouse/Packages/Add',function(){
	return view('AdminPanel.farmhouse.packages.add');
});
Route::get('/FarmHouse/Packages/Manage',function(){
	return view('AdminPanel.farmhouse.packages.manage');
});
Route::get('/FarmHouse/Order/Manage',function(){
	return view('AdminPanel.farmhouse.order.manage');
});
Route::get('/FarmHouse/List',function(){
	return view('Frontend.FarmHouse.list');
});

// Frotend Farmhouse End

// Frotend Cattering Start
Route::get('/Cattering/Add',function(){
	return view('AdminPanel.Cattering.add');
});

Route::get('/Cattering/Manage',function(){
	return view('AdminPanel.Cattering.manage');
});
Route::get('/Cattering/list',function(){
return view('frontend.Cattering.list');
});
Route::get('/Catering/Details',function(){
return view('frontend.Cattering.detail');
});
// Frotend Cattering End
// Frontend bus 

Route::get('/Transport/Add',function(){
return view('AdminPanel.Bus.add');
});

// Frontend bus end

// farmhouse Backend
Route::post('/Farm/Add','FarmController@Add');
Route::get('/Farm/manage','FarmController@GetManage');
Route::get('/FarmHouse/GetFarmData','FarmController@Get');
Route::get('/Delete/Farms/{id}','FarmController@deleteFarms');

Route::get('/FarmHouse/Service/Detail/{id}','FarmController@GetFarmsFront');

Route::get('/GetManager','FarmController@GetManager');
Route::get('/FarmHouse/Active/{id}','FarmController@Active');
Route::get('/FarmHouse/nonActive/{id}','FarmController@nonActive');
Route::get('/Delete/Farms/Manager/{id}','FarmController@deleteFarmsManager');
Route::get('/Admin','FarmController@count');
// farmhouse Backend End


 


// cattering backend
Route::post('/Cattering/Add','CatteringController@add');
Route::get('/Cattering/get','CatteringController@get');
Route::get('/Catering/getbackend','CatteringController@get_backend');
Route::get('/Delete/Catering/{id}','CatteringController@deleteCatering');
Route::get('/Catering/Service/Detail/{id}','CatteringController@GetCateringFront');

Route::get('/GetManager/Catering','CatteringController@GetManager');
Route::get('/Catering/Active/{id}','CatteringController@Active');
Route::get('/Catering/nonActive/{id}','CatteringController@nonActive');
Route::get('/Delete/Catering/Manager/{id}','CatteringController@deleteFarmsManager');

// cattering backend end

// Manager
Route::get('/Manager',function(){
	return view('Manager.home');
});
Route::get('/Manager/Farmhouse/Manage',function(){
return view('Manager.Farmhouse.Manage');
});
Route::get('/Manager/Catering/Manage',function(){
return view('Manager.Catering.Manage');
});
Route::get('/Manager/Transport/Manage',function(){
return view('Manager.Transport.Manage');
});

 
// Transport AdminPanel

Route::post('/Transport/Add','TransportController@add');

Route::get('/Transport/Get','TransportController@getAdminPanel');
Route::get('/Transport/Details',function(){
return view('AdminPanel.Bus.manage');
});
Route::get('/Delete/Transport/{id}','TransportController@deleteTransport');
Route::get('/Transport/Active/{id}','TransportController@Active');
Route::get('/Transport/nonActive/{id}','TransportController@nonActive');

Route::get('/gettransportManager','TransportController@gettransportManager');
Route::get('/Transport/GetFarmData','TransportController@Get');

Route::get('/Transport/Service/Detail/{id}','TransportController@GetTransportFront');

Route::get('/Transport/List',function(){
	return view('Frontend.transport.list');
});


Route::get('/test',function(Request $request){
return $request->session()->all();
});




