<?php

namespace App\Http\Livewire\Admin\Release;

use Zip;
use Illuminate\Support\Facades\Storage;

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


    public function downloadRelease($id)
    {
        $release = Release::find($id);
        $zip = Zip::create("{$release->id}.zip");
        $cover_art = Storage::disk('releases')->path($release->artwork);
        $zip->add($cover_art, 'cover.' . pathinfo($cover_art)['extension']);
        foreach ($release->songs as $song) {
            $zip->add(
                Storage::disk('songs')->path($song->file),
                "songs/{$song->track_number} - {$song->artist} - {$song->title}.mp3"
            );
        }
        return $zip;
    }
}
