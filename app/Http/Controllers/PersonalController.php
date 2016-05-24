<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use App\Http\Requests;

class PersonalController extends Controller
{
    public function index(){
        
        $personal = Personal::all();
        
        return $personal;
    }
}
