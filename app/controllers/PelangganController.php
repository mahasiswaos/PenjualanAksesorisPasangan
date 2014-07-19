<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pelanggan;
use View;

/**
 * Description of PelangganController
 *
 * @author nunenuh
 */
class PelangganController extends BaseController {

    public function index() {
        $pel = Pelanggan::find(3);

        $data = array(
            'pel' => $pel,
        );
        
        return View::make('pelanggan_view',$data);
    }

}
