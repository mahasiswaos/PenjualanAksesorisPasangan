<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AccWanita;
use View;

use Redirect;
use Input;

class AccWanitaController extends BaseController {

    public function view() {
        $acw = AccWanita::paginate(5);
        $data = array(
            'aksesoris_wanita' => $acw,
        );
        return View::make('accwanita.view', $data);
    }

    public function aksesorisAdd() {
        $tambah = AccWanita::all();
        $data = [
            'isi' => $tambah,
        ];
        return View::make('accwanita.add', $data);
    }

    public function prosesAdd() {
        $inp = Input::all();
        $t = new AccWanita();
        $t->kode_barang = $inp['kodebarang'];
        $t->nama_barang = $inp['namabarang'];
        $t->jenis_barang = $inp['jenisbarang'];
        $t->harga = $inp['harga'];
        $t->save();

  
            return Redirect::to('/aksesoris');
        }
    

    public function edit($id) {
        $t = AccWanita::find($id);
        $data = array(
            'aksesoris_wanita' => $t,
        );
        return View::make('accwanita.edit', $data);
    }

    public function editProses() {
        $inp = Input::all();
        $t = AccWanita::find($inp['id']);
        $t->kode_barang = $inp['kodebrg'];
        $t->nama_barang = $inp['namabrg'];
        $t->jenis_barang = $inp['jenisbrg'];
        $t->harga = $inp['harga'];
        $t->update();

        return Redirect::to('/aksesoris');
    }

    public function delete($id) {
        $t = AccWanita::find($id);
        $t->delete();
        return Redirect::to('/aksesoris');
    }

}
