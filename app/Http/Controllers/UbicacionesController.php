<?php

namespace App\Http\Controllers;

use App\Deparment;
use App\District;
use App\Province;
use Illuminate\Http\Request;

class UbicacionesController extends Controller
{
    public function getDepartments(){
        $departments=Deparment::orderBy('id','desc')
        ->select('id', 'department', 'status')->get();
        return response()->json($departments);
    }
    public function getProvincesByDepartment($department)
    {
        $provinces = Province::where('department_id', $department)->get();
        return response()->json($provinces);
    }

    public function getDistrictsByProvince($province)
    {
        $districts = District::where('province_id', $province)->get();
        return response()->json($districts);
    }
}
