<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        $countries=Country::all();
        return view('countries.index', compact('countries'));
    }
}
