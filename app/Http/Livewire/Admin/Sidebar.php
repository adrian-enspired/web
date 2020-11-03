<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    /** @var string Page */
    public $page = 'dashboard';

    /** @var array navigation items */
    public $nav_items = [
        [
            'id' => 'dashboard',
            'name' => 'Dashboard',
            'route' => '/admin/dashboard',
            'icon' => 'icon-speedometer',
            'class' => ''
        ],
        [
            'id' => 'users',
            'name' => 'Users',
            'route' => '/admin/users',
            'icon' => 'icon-people',
            'class' => ''
        ],
        [
            'id' => 'releases',
            'name' => 'Releases',
            'route' => '/admin/releases',
            'icon' => 'ti-music-alt',
            'class' => ''
        ],
        [
            'id' => 'messages',
            'name' => 'Messages',
            'route' => '/admin/messages',
            'icon' => 'icon-envelope-open',
            'class' => ''
        ],
        [
            'id' => 'reports',
            'name' => 'Reports',
            'route' => '/admin/reports',
            'icon' => 'icon-docs',
            'class' => ''
        ],

    ];

    public function render()
    {
        return view('livewire.admin.sidebar', [
            'user' => Auth::user(),
            'nav_items' => array_map(
                function ($item) {
                    if ($item['id'] === $this->page) {
                        $item['class'] = 'active';
                    }
                },
                $this->nav_items
            )
        ]);
    }

    /**
     * Logout current user
     */
    public function logout() {
        Auth::user()->logout();
        redirect('/login');
    }
}
