<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use App\Models\User;

class Topbar extends Component
{
    public function render()
    {
        return view('livewire.app.topbar', [
            'is_admin' => User::isImpersonatingUser()
        ]);
    }

    public function returnToAdmin()
    {
        return User::returnToAdmin();
    }
}
