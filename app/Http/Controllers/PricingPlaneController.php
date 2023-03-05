<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plane;
use App\Models\purches;
use Validator;
class PricingPlaneController extends Controller
{
    public function index()
    {
        return view('Admin.PricingPlane');
    }
    public function createPricing(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'plane_name' => 'required|max:255',
            'price' => 'required|numeric',
            'expiration_day' => 'required|integer',
            'number_of_usecase' => 'required|integer|numeric',
            'serial_no' => 'required|integer|numeric',
            'maximum_word_generator' => 'required|integer',
            'enable_custom_search_search' => 'required|boolean',
            'status' => 'required|boolean',
            'description' => 'required|string',
        ]);

        if($validatedData->fails()){
            return $validatedData->errors();
        }
    
        if($validatedData)
        {
            $plane = new plane();
            $plane->plane_name = $request['plane_name'];
            $plane->price = $request['price'];
            $plane->expiration_day = $request['expiration_day'];
            $plane->number_of_usecase = $request['number_of_usecase'];
            $plane->serial_no = $request['serial_no'];
            $plane->maximum_word_generator = $request['maximum_word_generator'];
            $plane->enable_custom_search_search = $request['enable_custom_search_search'];
            $plane->status = $request['status'];
            $plane->description = $request['description'];
            $result = $plane->save();
        
            if($result){
                return redirect()->to('/add-plane')
                ->with('success', 'Product created successfully.');
            }
        }
    }
}
