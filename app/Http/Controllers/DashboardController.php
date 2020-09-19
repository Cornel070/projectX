<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$title = "Super admin area";
    	return view('dashboard.index',compact('title'));
    }
}
