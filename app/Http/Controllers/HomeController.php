<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
         $name = $request->query('name');
    $country = $request->query('country');
  
    return view('home' , [
        'name' => $name,
        'country' => $country,
    ]);
    }
}
