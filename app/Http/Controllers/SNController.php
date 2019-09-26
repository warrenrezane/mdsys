<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SNController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'staff_nurse']);
    }

    public function index() {
        return view('staff_nurse.home');
    }
}
