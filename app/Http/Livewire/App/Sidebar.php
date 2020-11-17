<?php

namespace App\Http\Livewire\App;

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
            'route' => '/app/dashboard',
            'icon' => 'icon-speedometer',
            'class' => ''
        ],
        [
            'id' => 'upload',
            'name' => 'Upload',
            'route' => '/app/release/upload',
            'icon' => 'fas fa-upload',
            'class' => ''
        ],
        [
            'id' => 'releases',
            'name' => 'Releases',
            'route' => '/app/releases',
            'icon' => 'ti-music-alt',
            'class' => ''
        ],
        [
            'id' => 'messages',
            'name' => 'Messages',
            'route' => '/app/messages',
            'icon' => 'icon-envelope-open',
            'class' => ''
        ]

    ];

    public function render()
    {
        return view('livewire.app.sidebar', [
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
