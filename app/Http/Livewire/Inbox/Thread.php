<?php

namespace App\Http\Livewire\Inbox;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Thread as ThreadModel;
use Carbon\Carbon;

class Thread extends Component
{
    public $thread;
    public $messages;

    public function mount($id)
    {
        $this->thread = ThreadModel::find($id);
        $this->messages = $this->thread->messages()->get();
        $seen = $this->thread->participants()
            ->where('user_id', Auth::user()->id)
            ->first();
        if ($seen && $seen->pivot) {
            $seen->pivot->seen_at = Carbon::now();
            $seen->pivot->save();
        } else {
            return abort(404);
        }
    }

    public function render()
    {
        $user = Auth::user();
        return view('livewire.inbox.thread', [
            'admin' => $user->admin,
        ])->layout($user->layout(), [
                'page' => 'messages'
            ]);
    }
}
