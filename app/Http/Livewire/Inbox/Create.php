<?php

namespace App\Http\Livewire\Inbox;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Create extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.inbox.create', [
            'recipients' => $user->is_admin ?
            User::where('id', '!=', $user->id)->get() :
            User::where('admin', '==', true)
        ])->layout($user->layout(), [
            'page' => 'messages'
        ]);
    }
}
