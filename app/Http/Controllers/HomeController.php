<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Release;

class HomeController extends Controller
{

    public function render()
    {
        return view('index', [
            'releases' => Release::where('featured', '=', true)->orderBy('updated_at', 'DESC')->paginate(10)
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function redirects()
    {
        if (Auth::user()->admin) {
            return redirect('/admin/dashboard');
        } else {
            return redirect('/app/dashboard');
        }
    }
}
