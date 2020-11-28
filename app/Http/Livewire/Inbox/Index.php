<?php

namespace App\Http\Livewire\Inbox;

use Livewire\Component;
use App\Models\Thread;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $user = Auth::user();
        if (request()->has('sent')) {
            $threads = $user->sent();
        } else {
            $threads = $user->received();
        }

        $threads = $threads->paginate(10);

        return view('livewire.inbox.index', [
            'threads' => $threads
        ])->layout($user->layout(), [
            'page' => 'messages'
        ]);
    }

    public function create()
    {
        return redirect('inbox/create');
    }
}
