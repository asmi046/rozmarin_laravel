<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class IndexController extends Controller
{
    public function index() {
        $all_services = Service::all();
        return view('index', ['all_services' => $all_services]);
    }
    public function about() {
        return view('about');
    }

    public function ourWorks() {
        return view('our-works');
    }
}
