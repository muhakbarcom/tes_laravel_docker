<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// get data from env file
use Illuminate\Support\Facades\Config;


class HomeController extends Controller
{
    public function index()
    {
        // get data from env file
        $name = Config::get('app.name');
        return view('welcome', ['name' => $name]);
    }
}
