<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plane;

class PlaneDetailsController extends Controller
{

    public function planeDetails($id)
    {
        $plane = new plane();
        $SinglePlane = $plane->where('id',$id)->get()->first();

        return view('User.PlaneDetails',['SinglePlane'=>$SinglePlane]);
    }
    public function DeletePlane($id)
    {
        $plane = new plane();
        $plane->where('id',$id)->delete();
        
    }
}
