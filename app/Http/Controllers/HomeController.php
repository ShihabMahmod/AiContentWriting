<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plane;
class HomeController extends Controller
{
    public function index()
    {
        $plane = new plane();
        $allPlane = $plane::all();

        return view('User.Home',['allPlane'=>$allPlane]);
    }
}
