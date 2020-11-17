<?php

namespace App\Http\Livewire\App\Release;

use Livewire\Component;

class Upload extends Component
{
    public function render()
    {
        return view('livewire.app.release.upload')
            ->layout('layouts.app', [
                'page' => 'releases'
            ]);
    }
}
