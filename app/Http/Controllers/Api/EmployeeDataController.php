<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Department;
use App\Models\State;


class EmployeeDataController extends Controller
{
    public function countries(){
        $countries=Country::all();

        return response()->json($countries);
    }

    public function states(Country $country)
    {
        return response()->json($country->state);
    }

    public function cities(State $state)
    {
        return response()->json($state->city);
    }

    public function departments(){
        $departments=Department::all();

        return response()->json($departments);
    }
}
