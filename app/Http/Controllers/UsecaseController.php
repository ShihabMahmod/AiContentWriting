<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usecase;
use Validator;
class UsecaseController extends Controller
{
    public function index()
    {
        return view('Admin.AddUsecase');
    }
    public function Usecase(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'title' => 'required|string',
            'usecase' => 'required|string',
            'serial_no' => 'required|integer'
        ]);
        if($validate->fails())
        {
            return $validate->errors();
        }
        if($validate)
        {
            $usecase = new Usecase();

            $usecase->title = $request->input('title');
            $usecase->usecase = $request->input('usecase');
            $usecase->usecase_id = $request->input('serial_no');

            $result = $usecase->save();

            if($result){
                return redirect()->to('/add-use-case');
            }
        }
    }
}
