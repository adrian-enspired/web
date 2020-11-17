<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">

      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav">
              <li class="user-pro">
                <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                    <img src="{{ $user->profile_photo_url }}" alt="user-img" class="img-circle d-i"><span class="hide-menu">{{ $user->name }}</span>
                </a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('profile.show') }}"><i class="ti-user"></i> My Profile</a></li>
                    <li>
                      <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="javascript:void(0);" onclick="$(this).closest('form').submit();"><i class="fas fa-power-off"></i> Logout</a>
                      </form>
                    </li>
                </ul>
              </li>
              @foreach ($nav_items as $item)
                <li>
                  <a class="{{ $item['class'] }} waves-effect waves-dark" href="{{ $item['route'] }}" aria-expanded="false">
                    <i class="{{ $item['icon'] }}"></i>
                    <span class="hide-menu">{{ $item['name'] }}</span>
                  </a>
                </li>
              @endforeach
          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
