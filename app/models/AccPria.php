<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Description of Test
 *
 * @author Sangga
 */
class AccPria extends Eloquent {

    protected $table = 'accpria';
    public $timestamps = false;

     public function pembelian() {
        return $this->hasMany("App\\Models\\Pembelian");
    }
    
}
