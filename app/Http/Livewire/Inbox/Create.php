<?php

namespace App\Http\Livewire\Inbox;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Thread;

class Create extends Component
{
    public $draft;
    public $recipients;

    public function render()
    {
        $user = Auth::user();
        return view('livewire.inbox.create')
            ->layout($user->layout(), [
                'page' => 'messages'
            ]);
    }

    public function rules()
    {
        return [
            'draft.subject' => 'required|string',
            'draft.body' => 'required|string',
            'draft.recipients' => 'required|array'
        ];
    }

    public function mount()
    {
        $this->draft = [];
        $user = Auth::user();
        $this->recipients = $user->admin ?
            User::where('id', '!=', $user->id)->get() :
            User::where('admin', '==', true)->get();
    }

    public function send()
    {
        $this->validate();
        $thread = Auth::user()
                        ->subject($this->draft['subject'])
                        ->writes($this->draft['body'])
                        ->to($this->draft['recipients'])
                        ->send();
        session()->flash('message', ($thread) ? 'Your message has been sent.' : 'Whoops something went wrong.');
        return redirect()
            ->route('inbox.index');
    }
}
