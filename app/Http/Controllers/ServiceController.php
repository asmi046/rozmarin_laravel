<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{

    public function index($slug) {
        $service_info = Service::where('slug', $slug)->first();

        return view('service-page', ['service_info' => $service_info]);
    }
}
