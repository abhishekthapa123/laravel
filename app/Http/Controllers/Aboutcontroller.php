<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aboutcontroller extends Controller
{
public function index()
{
    $title ="About Us";
    return view('aboutus')->with('title',$title);//title is the variable for aboutcontroller.blade.php//
}
}
