<?php

namespace App\Http\Controllers;
use App\Models\Plane;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $plane = new plane();
        $allPlane = $plane::all();

        return view('Admin.dashboard',['allPlane'=>$allPlane]);
    }
}
