<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pembelian;
use App\Models\AccPria;
use App\Models\AccWanita;
use View;
use Validator;
use Session;
use Redirect;
use Input;

class PembelianController extends BaseController {

    public function view() {
        $pembelian = Pembelian::All();
        $data = [
            'pembelian' => $pembelian,
        ];
        return View::make('pembelian.view', $data);
    }

    public function add() {
        $acp = AccPria::all();
        $acw = AccWanita:: all();
        $data = [
            'isi' => $acp,
            'tambah' => $acw,
        ];
        return View::make('pembelian.add', $data);
    }

    public function addProses() {
        $rules = [

            'nama_pembeli' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'id_pria' => 'required',
            'id_wanita' => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);
       
        if ($validator->fails()) {
            return Redirect::to('/pembelian/add')->withErrors($validator);
        } else {
            
           $inp = Input::all();
           $pbl = new Pembelian;
           $pbl-> nama_pembeli = $inp ['nama_pembeli'];
           $pbl-> no_hp = $inp ['no_hp'];
           $pbl-> alamat = $inp ['alamat'];
           $pbl-> id_pria = $inp ['id_pria'];
           $pbl-> id_wanita = $inp ['id_wanita'];
           $pbl->save();       

            Session::flash('message', 'Successfully Add!');
            return Redirect::to('pembelian');
        }
             
        
    }

    public function edit($id) {
        $pembelian = Pembelian::find($id);
        $data = array(
            'pembelian' => $pembelian,
        );
        return View::make('pembelian.edit', $data);
    }

    public function editProses() {
        $inp = Input::all();
        $ket = Pembelian::find($inp['id']);
        $ket->nama_pembeli = $inp['namapembeli'];
        $ket->no_hp = $inp['no_hp'];
        $ket->alamat = $inp['alamat'];
        $ket->save();

        return Redirect::to('/pembelian');
    }

    public function delete($id) {
        $t = Pembelian::find($id);
        $t->delete();
        return Redirect::to('/pembelian');
    }

}
