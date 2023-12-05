<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function  show(){
        $news="<script>alert('Attack');</script>";
        return view('home',['newString'=>$news]);
    }


}
