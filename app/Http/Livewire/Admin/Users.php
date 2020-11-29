<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Traits\Sortable;
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
            'editing.company' => 'nullable|string',
            'editing.phone' => 'nullable|string',
            'editing.address' => 'nullable|string',
            'editing.bank_account_info' => 'nullable|string',
            'editing.paypal_email' => 'nullable|email',
            'editing.admin' => 'boolean',
            'editing.password' => $password_rules,
            'editing.password_confirmation' => ''
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

        unset($this->editing->password_confirmation);
        $this->editing->admin = $this->editing->admin || false;

        $this->editing->save();
        $this->showEditModal = false;
    }

    public function render()
    {
        return view('livewire.admin.users', [
            'users' => User::search(['name', 'email', 'company'], $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(10)
        ])->layout('layouts.admin', [
            'page' => 'users'
        ]);
    }

    public function loginAsUser(User $user)
    {
        return User::loginAs($user);
    }
}
