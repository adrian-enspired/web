<?php

namespace App\Http\Livewire\App\Release;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Song;

class Upload extends Component
{
    use WithFileUploads;

    public $songs;
    public $new_songs = [];

    protected $listeners = ['upload:finished' => 'storeNewSongs'];

    public function render()
    {
        return view('livewire.app.release.upload')
            ->layout('layouts.app', [
                'page' => 'releases'
            ]);
    }

    public function mount()
    {
        $this->songs = collect([]);
    }

    public function storeNewSongs()
    {
        foreach ($this->new_songs as $new_song) {
            $original_filename = $new_song->getClientOriginalName();
            $new_filename = Str::uuid() . ".{$new_song->extension()}";

            $song = Song::create([
              'file' => $new_filename,
              'original_filename' => $original_filename
            ]);

            $new_song->storeAs('/', $new_filename, ['disk' => 'songs']);
            $this->songs->push($song);
        }

        $this->new_songs = [];
    }
}
