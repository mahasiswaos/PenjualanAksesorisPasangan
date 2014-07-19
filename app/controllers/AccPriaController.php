<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccPria;
use View;
use Illuminate\Support\Facades\Redirect;
use Input;

/**
 * Description of AccPriaController
 *
 * @author Sangga Skyler
 */
class AccPriaController extends BaseController {
    
    public function view() {
        $t = AccPria::paginate(5);

        $data = array(
            'aksesoris_pria' => $t,
        );
        return View::make('accpria.view', $data);
    }

    public function add() {
        return View::make('accpria.add');
    }

    public function addProses() {
        $inp = Input::all();
        $add = new AccPria();
        $add->kode_barang = $inp['kodebrg'];
        $add->nama_barang = $inp['namabrg'];
        $add->jenis_barang = $inp['jenisbrg'];
        $add->harga = $inp['harga'];
        $add->save();
        
        return Redirect::to('/accpria');
    }

    public function edit($id) {
        $t = AccPria::find($id);
        $data = array(
            'aksesoris_pria' => $t,
        );
        return View::make('accpria.edit', $data);
    }

    public function editProses() {
        $inp = Input::all();
        $t = AccPria::find($inp['id']);
        $t->kode_barang = $inp['kodebrg'];
        $t->nama_barang = $inp['namabrg'];
        $t->jenis_barang = $inp['jenisbrg'];
        $t->harga = $inp['harga'];
        $t->save();
        
        return Redirect::to('/accpria');
    }

    public function delete($id) {
        $t = AccPria::find($id);
        $t->delete();
       return Redirect::to('/accpria');
    }

}
