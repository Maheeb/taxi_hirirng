<?php

namespace App\Http\Controllers;

use App\Cab;
use App\Tarif;
use App\Vehicle;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        $tarifs = Tarif::all();

        return view("front.index",compact('tarifs'));

    }


    public function jn(Request $request){

        Cab::create($request->all());
        return redirect()->back()->with('message', "You have booked successfully");
    }
}
