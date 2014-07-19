<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Pembelian extends Eloquent {

    protected $table = 'pembelian';
    public $timestamps = false;

    public function accwanita() {
        return $this->belongsTo("App\\Models\\AccWanita");
    }

    public function accpria() {
        return $this->belongsTo("App\\Models\\AccPria");
    }

}
