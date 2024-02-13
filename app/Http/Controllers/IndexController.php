<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Project;

class IndexController extends Controller
{
    public function index() {
        $all_services = Service::all();
        $main_project = Project::select()->take(6)->get();
        return view('index', [
            'all_services' => $all_services,
            'main_project' => $main_project,
        ]);
    }

    public function policy() {
        return view('policy');
    }

    public function ourWorks() {
        return view('our-works');
    }
}
