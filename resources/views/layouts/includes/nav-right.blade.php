<ul class="nav-menus">
    <li class="language-nav">
        <div class="translate_wrapper">
            <div class="current_lang">
                <div class="lang">
                    <i class="flag-icon flag-icon-us"></i>
                    <span class="lang-txt">EN</span>
                </div>
            </div>
            <div class="more_lang">
                <div class="lang selected" data-value="en">
                    <i class="flag-icon flag-icon-us"></i>
                    <span class="lang-txt">English<span> (US)</span></span>
                </div>
                <div class="lang" data-value="de">
                    <i class="flag-icon flag-icon-de"></i>
                    <span class="lang-txt">Deutsch</span>
                </div>
                <!-- باقي اللغات -->
            </div>
        </div>
    </li>

    <li class="fullscreen-body">
    <span>
      <svg id="maximize-screen">
        <use href="{{ asset('assets/svg/icon-sprite.svg#full-screen') }}"></use>
      </svg>
    </span>
    </li>

    <!-- باقي عناصر القائمة العلوية -->
    <!-- Bookmark, Search, Mode, Cart, Notifications, Profile -->

    <li class="profile-nav onhover-dropdown pe-0 py-0">
        <div class="d-flex profile-media">
            <img class="b-r-10" src="{{ asset('assets/images/dashboard/profile.png') }}" alt="">
            <div class="flex-grow-1">
                <span>Emay Walter</span>
                <p class="mb-0">Admin <i class="middle fa-solid fa-angle-down"></i></p>
            </div>
        </div>
        <ul class="profile-dropdown onhover-show-div">
{{--            <li><a href="{{ route('account') }}"><i data-feather="user"></i><span>Account</span></a></li>--}}
{{--            <li><a href="{{ route('inbox') }}"><i data-feather="mail"></i><span>Inbox</span></a></li>--}}
{{--            <li><a href="{{ route('taskboard') }}"><i data-feather="file-text"></i><span>Taskboard</span></a></li>--}}
{{--            <li><a href="{{ route('settings') }}"><i data-feather="settings"></i><span>Settings</span></a></li>--}}
            <li>
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}
{{--                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">--}}
{{--                        <i data-feather="log-in"></i><span>Log out</span>--}}
{{--                    </a>--}}
{{--                </form>--}}
            </li>
        </ul>
    </li>
</ul>
