<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use View;

class JobController extends Controller
{
    
function index(){
    $jobs = Job::all();
    // $jobs = Collect($jobs);
    return view('Job/index',data:['jobs' => $jobs,'name'=>"Malyzi"]);
}

}
