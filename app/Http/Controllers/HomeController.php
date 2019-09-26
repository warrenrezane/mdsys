<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            return redirect('/admin');
        }

        if (Auth::user()->role === 'dentist') {
            return redirect('/dentist');
        }

        if (Auth::user()->role === 'staff_nurse') {
            return redirect('/staff_nurse');
        }

        if (Auth::user()->role === 'medical_doctor') {
            return redirect('/medical_doctor');
        }
    }
}
