<?php

namespace App\Http\Livewire\App\Release;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Song;
use App\Models\Release;

use wapmorgan\Mp3Info\Mp3Info;

class Upload extends Component
{
    use WithFileUploads;

    public $songs;
    public $release;

    public $newArtwork;

    public $new_songs = [];

    protected $listeners = ['upload:finished' => 'storeNewSongs'];

    public function rules()
    {
        return [
            'release.title' => 'required|string',
            'release.artist' => 'required|string',
            'release.label' => 'string',
            'newArtwork' => 'image'
        ];
    }

    public function render()
    {
        return view('livewire.app.release.upload')
            ->layout('layouts.app', [
                'page' => 'releases'
            ]);
    }

    public function save()
    {
        $this->validate();
        $new_filename = Str::uuid() . ".{$this->newArtwork->extension()}";
        $this->newArtwork->storeAs('/', $new_filename, ['disk' => 'releases']);
        $this->release->artwork = $new_filename;
        $this->release->user_id = Auth::user()->id;
        $this->release->save();

        foreach ($this->songs as $song_id) {
            $song = Song::find($song_id);
            $song->release_id = $this->release->id;
            $song->save();
        }
    }

    public function mount()
    {
        $this->songs = [];
        $this->release = Release::make();
    }

    public function storeNewSongs()
    {
        foreach ($this->new_songs as $new_song) {
            $audio = new Mp3Info($new_song->path(), true);
            $id3 = [
                'bitrate' => $audio->bitRate ?? 0,
                'samplerate' => $audio->sampleRate ?? 0,
                'duration' => $audio->duration ?? 0,
                'tags' => $audio->tags ?? []
            ];

            $original_filename = $new_song->getClientOriginalName();
            $new_filename = Str::uuid() . ".{$new_song->extension()}";
            $song = Song::create([
              'file' => $new_filename,
              'title' => $id3['tags']['song'] ?? '',
              'artist' => $id3['tags']['artist'] ?? '',
              'genre' => $id3['tags']['genre'] ?? '',
              'original_filename' => $original_filename,
              'track_number' => Song::whereIn('id', $this->songs)->max('track_number') + 1,
              'id3' => json_encode($id3)
            ]);

            $new_song->storeAs('/', $new_filename, ['disk' => 'songs']);
            $this->songs[] = $song->id;
        }
        $this->emit('refreshSongs');
        $this->new_songs = [];
    }

    public function updateTrackNumbers(array $tracks_in_order)
    {
        $dump = [];

        foreach ($tracks_in_order as $i => $song_id) {
            $song = Song::find($song_id);
            $song->track_number = $i + 1;
            $song->save();

            $dump[] = $song->toArray();
        }

        dd($dump);
    }
}
