<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    //

    public function index(){
        //return "Hola plastifer!!";
        return view('store.index');
    }

    public function sobre_nosotros()
    {
        return view('store.sobre_nosotros');
    }


}
