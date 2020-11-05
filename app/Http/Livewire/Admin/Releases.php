<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Release;
use App\Actions\Sortable;
use App\Models\User;

class Releases extends Component
{
    use WithPagination;
    use Sortable;

    public $search = '';

    public $showEditModal = false;

    public $editing;

    public $release_status;

    public function rules()
    {
        $id = $this->editing ? $this->editing->id : 0;
        return [
            'editing.title' => 'required|string',
            'editing.artist' => 'string',
            'editing.status' => 'string',
        ];
    }

    public function mount()
    {
        $this->editing = Release::make();
        $this->release_status = config('enums.release_status');
    }

    public function edit(Release $release)
    {
        if ($this->editing->isNot($release)) {
            $this->editing = $release;
        }
        $this->showEditModal = true;
    }

    public function create()
    {
        if ($this->editing->getKey()) {
            $this->editing = Release::make();
        }

        $this->showEditModal = true;
    }
    public function save()
    {
        $this->validate();
        $this->editing->save();
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.admin.releases', [
            'releases' => Release::search('title', $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(10)
        ])->layout('layouts.admin', [
            'page' => 'releases'
        ]);
    }
}
