<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admindashbord extends Controller
{
    public function dashboard()
    {
        return vieW('dashbordview');
    }
}
