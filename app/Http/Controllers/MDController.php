<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MDController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'medical_doctor']);
    }

    public function index() {
        return view('medical_doctor.home');
    }
}
