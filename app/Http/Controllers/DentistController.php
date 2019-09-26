<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DentistController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'dentist']);
    }

    public function index() {
        return view('dentist.home');
    }
}
