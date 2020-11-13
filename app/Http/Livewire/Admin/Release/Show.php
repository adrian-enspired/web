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
        $zip->add(Storage::disk('public')->path($release->artwork));
        foreach ($release->songs as $song) {
            $zip->add(Storage::disk('public')->path($song->file));
        }
        return $zip;
    }
}
