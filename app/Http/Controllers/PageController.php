<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function man() {
        return view('pages.man');
    }

    public function woman() {
        return view('pages.woman');
    }

    public function uniform() {
        return view('pages.uniform');
    }
}
