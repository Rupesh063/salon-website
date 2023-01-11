<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class gallerycontroller extends Controller
{
    public function index ()
    {
        return view('frontened.gallery');
    }
}
