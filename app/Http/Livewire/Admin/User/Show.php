<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;

class Show extends Component
{
    public $user;

    public function mount($id)
    {
        $this->user = User::find($id);
    }
    public function render()
    {
        return view('livewire.admin.user.show')
            ->layout('layouts.admin', [
                'page' => 'users'
        ]);
    }
}
