<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use View;
use App\Models\Laporan;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('hello');
	}
        
        public function percobaan() {
           $lap = Laporan::all();
           
           $data = array(
               'tests'=>$lap,
           );
           
//           print_r($lap[0]);
           return View::make('laporan_view',$data);
        }
        

}
