<?php

namespace App\Http\Livewire\App\Release;

use Livewire\Component;
use App\Models\Song as Model;

class Song extends Component
{
    public $song;

    public function render()
    {
        return view('livewire.app.release.song');
    }

    public function save($song)
    {
        dd($song);
    }
}
