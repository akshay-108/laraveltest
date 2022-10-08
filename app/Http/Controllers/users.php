<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    public function index($name)
    {
        echo "Hello from controller " . $name;
    }
}
