  <header >
        <nav>
            <ul>
                <li><img src="../../template/assets/img/logo.png" alt=""></li>
            </ul>
            <ul class="header-profile">
                <li class="avatar-item"><img src="../../template/assets/img/avatar.jpg" alt="" class="avatar-img"></li>
                <li><span>team2devs.com</span></li>
            </ul>
        </nav>
        <span class="header-profile-nav">
           <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </span>
</header>