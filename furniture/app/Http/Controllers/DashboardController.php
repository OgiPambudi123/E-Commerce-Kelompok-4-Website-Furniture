<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DashboardController extends Controller
{
    public function index() {
        $data = array('title' => 'Dashboard');
        return view('dashboard.index', $data);
    }
}
