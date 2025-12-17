<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   
    function index()
    {
        return view(view: 'index');
    }   
    

    function about()
    {
        return view(view: 'about',data: ['pageTitle' => 'About']);
    }

    function contact()
    {
        return view(view: 'contact',data: ['pageTitle' => 'Contact']);
    }

}
