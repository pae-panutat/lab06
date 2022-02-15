<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index() {
        $city = "123 กทม. ประเทศไทย";
        return view('about', ['address' => $city]);
    }

    function showData() {
       echo "Hello Laravel 7";
    }
}
