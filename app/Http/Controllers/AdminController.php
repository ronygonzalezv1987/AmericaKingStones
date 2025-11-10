<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return response()->json("Hello admin",200);
    }
    public function noAccess(){
        return response()->json("No access",200);
    }
}
