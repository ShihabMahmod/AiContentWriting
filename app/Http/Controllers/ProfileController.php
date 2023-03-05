<?php

namespace App\Http\Controllers;
use App\Models\Usecase;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $usecase = new Usecase();

        $allUsecase = $usecase::all();

        return view('User.Profile',['allUsecase'=>$allUsecase]);
    }
    public function getUsecase($id)
    {
        $usecase = new Usecase();
        $getUsecase = $usecase::find($id);
        return json_encode($getUsecase);
    }
}
