<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //funzione rotta index:
    public function index() {
        return view('index');
    }

    public function article() {
        return view('article');
    }

}
