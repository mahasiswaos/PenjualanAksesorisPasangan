<?php

namespace App\Models;

use App\Controllers\BaseController;
use App\Models\Users;

class TestController extends BaseController{
    public function index() {
        $user = Users::all();
        
        echo "<pre>";
        print_r($user);
        echo "</pre>";
    }    
}
