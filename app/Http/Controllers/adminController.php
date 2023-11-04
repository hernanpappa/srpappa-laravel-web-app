<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class adminController extends Controller
{
    //
    public function administrar(){

        $response = Gate::inspect('edit-settings');

        if ($response->allowed()) {
            return view('adminPage');
        } else {
            echo ('<center><h1>');
            echo $response->message();
            echo ('</h1></center>');
            echo ('<meta http-equiv="refresh" content="3; url=/home">');
        } 

    }


}
