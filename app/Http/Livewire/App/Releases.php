<?php

namespace App\Http\Livewire\App;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Release;

class Releases extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.app.releases', [
            'releases' => $user->releases()->get()
        ])->layout('layouts.app', [
            'page' => 'releases'
        ]);
    }
}
