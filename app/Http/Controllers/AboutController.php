<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index() {
        $address = "123 กทม. ประเทศไทย";
        $tel = "088-266570";
        $email = "panutatinfo@gmail.com";
/*         return view('about', ['address' => $address, 'tel' => $tel, 'email' => $email]);
 */        return view('about', compact('address','tel','email'))
                        ->with('address', $address)
                        ->with('tel', $tel)
                        ->with('email', $email)
                        ->with('success', "Success")
                        ->with('error', "error");
    }

    function showData() {
       echo "Hello Laravel 7";
    }
}
