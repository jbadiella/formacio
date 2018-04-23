<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UsersController extends BaseController
{

    public function edit($id) {
       return ("Edició de l'usuari: $id");
    }

    public function nick($name, $nick) {
       return ("Hola, $name (altrament dit $nick)");
    }

    public function name($name) {
       return ("Hola, $name");
    }


}
