<?php

namespace App\Http\Livewire\Inbox;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Thread as ThreadModel;

class Thread extends Component
{
    public $thread;
    public $messages;

    public function mount(ThreadModel $thread)
    {
        $this->thread = $thread;
        $this->messages = $this->thread->messages()->get();
        $seen = $thread->participants()
            ->where('user_id', Auth::user()->id)
            ->first();
        dump($thread->participants()->get());
        dump(Auth::user()->id);
        dump($seen);
        // dump($seen->pivot);
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
        return view('livewire.inbox.thread')
            ->layout($user->layout(), [
                'page' => 'messages'
            ]);
    }
}
