<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nkpProductController extends Controller
{
    public string nkpIndex()
    {
        $fruits = array ("Apple","Orange","Mango","Banana","Pineapple");
        return view('test',["fruits"=>$fruits]);
    }
}

