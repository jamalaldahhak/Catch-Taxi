<ul class="sidebar-links" id="simple-bar">
    <li class="back-btn">
        <a href="">
            <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="">
        </a>
        <div class="mobile-back text-end">
            <span>Back</span>
            <i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i>
        </div>
    </li>

    <li class="pin-title sidebar-main-title">
        <div>
            <h6>Pinned</h6>
        </div>
    </li>

    <li class="sidebar-main-title">
        <div>
            <h6 class="lan-1">General</h6>
        </div>
    </li>

    <!-- Dashboard Menu -->
    <li class="sidebar-list">
        <i class="fa-solid fa-thumbtack"></i>
        <label class="badge badge-light-primary">11</label>
        <a class="sidebar-link sidebar-title" href="#">
            <svg class="stroke-icon">
                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
            </svg>
            <svg class="fill-icon">
                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
            </svg>
            <span class="lan-3">Dashboard</span>
        </a>
        <ul class="sidebar-submenu">
{{--            <li><a class="lan-4" href="{{ route('dashboard.default') }}">Default</a></li>--}}
{{--            <li><a class="lan-5" href="{{ route('dashboard.ecommerce') }}">Ecommerce</a></li>--}}
{{--            <li><a href="{{ route('dashboard.online-course') }}">Online course</a></li>--}}
{{--            <li><a href="{{ route('dashboard.crypto') }}">Crypto</a></li>--}}
{{--            <li><a href="{{ route('dashboard.social') }}">Social</a></li>--}}
{{--            <li><a href="{{ route('dashboard.nft') }}">NFT</a></li>--}}
{{--            <li><a href="{{ route('dashboard.school-management') }}">School management</a></li>--}}
{{--            <li><a href="{{ route('dashboard.pos') }}">POS</a></li>--}}
{{--            <li>--}}
{{--                <label class="badge badge-light-success">New</label>--}}
{{--                <a href="{{ route('dashboard.crm') }}">CRM</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <label class="badge badge-light-success">New</label>--}}
{{--                <a href="{{ route('dashboard.analytics') }}">Analytics</a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <label class="badge badge-light-success">New</label>--}}
{{--                <a href="{{ route('dashboard.hr') }}">HR</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
    </li>

    <!-- باقي القائمة الجانبية - يمكن تقسيمها إلى ملفات أصغر إذا كانت طويلة -->
    <!-- يمكنك إضافة باقي العناصر هنا بنفس النمط -->

</ul>
