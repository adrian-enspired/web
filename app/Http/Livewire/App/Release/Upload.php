<?php

namespace App\Http\Livewire\App\Release;

use Livewire\Component;
use Livewire\WithFileUploads;

class Upload extends Component
{
    use WithFileUploads;

    public $songs = [];

    public function render()
    {
        return view('livewire.app.release.upload')
            ->layout('layouts.app', [
                'page' => 'releases'
            ]);
    }
}
