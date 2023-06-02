<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ImagecrudController extends Controller
{
    public function show()
    {
        return view('imageupload.showimg');
    }
    public function create()
    {
        return view('imageupload.create');
    }
}
