<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AddressesController extends Controller
{

    public function index(){
        $addresses = Address::all();
        return view('addresses.index',compact('addresses'));
    }
}
