<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class JobController extends Controller
{
    
function index(){
    return view('job/index');
}

}
