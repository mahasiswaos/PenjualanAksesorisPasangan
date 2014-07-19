<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Test;
use View;
use Illuminate\Support\Facades\Redirect;

/**
 * Description of Test_Controller
 *
 * @author ACER
 */
class Test_Controller extends BaseController{
    public function view() {
     $t = Test::paginate(5); 
    //mencari data pada table test
    //dengan id nomer 1
    //echo "<pre>";
    // print_r($t);
    //echo "</pre>";
    $data =array(
      'test'=>$t,  
    );
    return View::make('test.view',$data);
    }
    public function add() {
       $t= new Test();
       $t->nama='budi';
       $t->tanggal_lahir=date('y-m-d');
       $t->save();
    }
    public function addProses() {
        
    }
    public function edit($id) {
      $t=Test::find($id);
      $t->nama='ADI';
      $t->update();
      
    }
    public function editProses() {
        
    }
    public function delete($id) {
       $t=Test::find($id);
       $t->delete();
       return Redirect::to('/test');
    }
}
