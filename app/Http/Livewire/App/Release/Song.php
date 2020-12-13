<?php

namespace App\Http\Livewire\App\Release;

use Livewire\Component;
use App\Models\Song as SongModel;

class Song extends Component
{
    public $errors = [];
    protected $rules = [
        'song.title' => 'required|string',
        'song.artist' => 'required|string',
        'song.composer' => 'nullable|string',
        'song.lyrics' => 'nullable|string',
        'song.genre' => 'nullable|string',
        'song.language' => 'nullable|string',
        'song.instrumental' => 'boolean',
        'song.explicit' => 'boolean',
        'song.live' => 'boolean',
        'song.cover' => 'boolean'
    ];
    public $showEditModal = false;
    public $song;

    public function render()
    {
        return view('livewire.app.release.song');
    }

    public function edit(SongModel $song)
    {
        if ($this->song->isNot($song)) {
            $this->song = $song;
        }
        $this->showEditModal = true;
    }

    public function save(SongModel $song)
    {
        dd($song);
    }
}
