<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * {@inheritDoc}
     */
    public function index()
    {
        if (Auth::user()->admin) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/app/dashboard');
        }
    }
}
