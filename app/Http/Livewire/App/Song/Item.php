<?php

namespace App\Http\Livewire\App\Song;

use Livewire\Component;
use App\Models\Song;

class Item extends Component
{
    protected $listeners = ['updateSongTrackNumber', 'refreshSongs'];

    public $song;

    public function rules()
    {
        return [
            'song.track_number' => 'required|integer',
            'song.title' => 'string',
            'song.artist' => 'string',
            'song.composer' => 'string',
            'song.lyrics' => 'string',
            'song.genre' => 'string',
            'song.language' => 'string',
            'song.instrumental' => 'boolean',
            'song.explicit' => 'boolean',
            'song.cover' => 'boolean',
            'song.live' => 'boolean',
            'song.original_filename' => 'required|string'
        ];
    }
    public function mount(Song $song)
    {
        $this->song = $song;
    }
    public function render()
    {
        return view('livewire.app.song.item');
    }

    public function save()
    {
        $this->validate();
        $this->song->save();
    }

    public function updateSongTrackNumber(int $song_id, int $track_number)
    {
        debug($this->song->id, $song_id, $track_number);
        if ($song_id === $this->song->id) {
            $this->song->track_number = $track_number;
            $this->song->save();
        }
    }

    public function refreshSongs()
    {
        $this->song->refresh();
    }
}
