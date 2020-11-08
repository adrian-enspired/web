<?php

namespace App\Http\Livewire\Admin\Release;

use Livewire\Component;
use App\Models\Release;
use App\Models\Song;

class Show extends Component
{
    public $release;
    public $song;

    public $showSongModal = false;

    public function mount($id)
    {
        $this->release = Release::find($id);
    }

    public function render()
    {
        return view('livewire.admin.release.show')
            ->layout('layouts.admin', [
                'page' => 'releases'
        ]);
    }

    public function showSong(Song $song)
    {
        $this->song = $song;
        $this->showSongModal = true;
    }
}
