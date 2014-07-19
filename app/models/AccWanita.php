<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of Test
 *
 * @author ACER
 */
class AccWanita Extends Eloquent {

    protected $table = 'accwanita';
    public $timestamps = false;

    public function pembelian() {
        return $this->hasMany("App\\Models\\Pembelian");
    }

}
