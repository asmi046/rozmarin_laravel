<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }
    public function about() {
        return view('about');
    }
    public function serviceDetail() {
        return view('service-detail');
    }
    public function ourWorks() {
        return view('our-works');
    }
}