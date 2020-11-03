<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class AppLayout extends Component
{

    public $page = 'dashboard';

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $user = Auth::user();
        return view($user->admin ? 'layouts.admin' : 'layouts.app');
    }
}
