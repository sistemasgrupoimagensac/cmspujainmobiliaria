<?php

namespace App\Http\Controllers;

use App\Department;
use App\District;
use App\Province;
use Illuminate\Http\Request;

class UbicacionesController extends Controller
{
    public function getDepartments(){
        $departments=Department::orderBy('id','desc')
        ->select('id', 'department', 'status')->get();
        return response()->json($departments);
    }
    public function getProvincesByDepartment()
    {
        $provinces = Province::get();
        return response()->json($provinces);
    }

    public function obtenerDistrito()
    {
        $districts = District::get();
        return response()->json($districts);
    }
}
