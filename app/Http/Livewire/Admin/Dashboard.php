<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ {
    User,
    Release
};

class Dashboard extends Component
{
    public function render()
    {
        $users = User::all();
        $releases = Release::all();
        return view('livewire.admin.dashboard', [
            'user_count' => $users->count(),
            'release_count' => $releases->count(),
            'users' => $users->sortByDesc('created_at')->slice(0, 10),
            'releases' => $releases->sortByDesc('created_at')->slice(0, 10)
        ])->layout('layouts.admin', [
                'page' => 'dashboard'
            ]);
    }
}
