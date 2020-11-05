<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Actions\Sortable;
use App\Actions\Fortify\PasswordValidationRules;

class Users extends Component
{
    use WithPagination;
    use Sortable;
    use PasswordValidationRules;

    public $search = '';

    public $showEditModal = false;

    public $editing;

    public function rules()
    {
        $id = $this->editing ? $this->editing->id : 0;
        $password_rules = $id ? '' : $this->passwordRules();
        return [
            'editing.name' => 'required|string',
            'editing.email' => 'required|email|unique:users,email,' . $id,
            'editing.company' => 'string',
            'editing.phone' => 'string',
            'editing.admin' => 'boolean',
            'editing.password' => $password_rules,
        ];
    }

    public function mount()
    {
        $this->editing = User::make();
    }

    public function edit(User $user)
    {
        if ($this->editing->isNot($user)) {
            $this->editing = $user;
        }
        $this->showEditModal = true;
    }

    public function create()
    {
        if ($this->editing->getKey()) {
            $this->editing = User::make();
        }

        $this->showEditModal = true;
    }
    public function save()
    {
        $this->validate();
        if ($this->editing->id) {
            unset($this->editing->password);
        }
        $this->editing->save();
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.admin.users', [
            'users' => User::search('name', $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(10)
        ])->layout('layouts.admin', [
            'page' => 'users'
        ]);
    }
}
