<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <div class="user-profile">
            <div class="user-pro-body">
                <div><img src="{{ $user->profile_photo_url }}" alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $user->name }}<span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <a href="{{ route('profile.show') }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="fas fa-power-off"></i> Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @foreach ($nav_items as $item)
                    <li>
                        <a id="nav-{{ $item['id'] }} class="{{ $item['class'] }} waves-effect waves-dark" href="{{ $item['route'] }}" aria-expanded="false">
                            <i class="{{ $item['icon'] }}"></i>
                            <span class="hide-menu">{{ $item['name'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>
