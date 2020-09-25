<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini"><img src="https://img.icons8.com/cotton/35/000000/speed.png"></a>
            <a href="#" class="simple-text logo-normal">Hello {{Auth::user()->name}}!</a>
        </div>
        <ul class="nav">

            @if(Auth::user()->user_type ==1)
                <li @if ($pageSlug == 'dashboard') class="active " @endif>
                    <a href="/dashboard">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>
            @endif

            <li>
                <a href="/router#/vue"><img class="mr-4" src="https://img.icons8.com/cute-clipart/20/000000/shop.png"> Vue</a>
            </li>

            <li>
                <a  href="/router#/map"><img class="mr-4" src="https://img.icons8.com/color/20/000000/map.png"> Map</a>
            </li>

            <li>
                <a  href="/router#/notification"><img class="mr-4" src="https://img.icons8.com/cute-clipart/20/000000/shop.png"> Shop</a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >Personal</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        @if(Auth::user()->user_type == 2)
                            <li @if ($pageSlug == 'profile') class="active " @endif>
                                <a href="{{ route('profile.edit')  }}">
                                    <i class="tim-icons icon-single-02"></i>
                                    <p>{{ __('User Profile') }}</p>
                                </a>
                            </li>
                        @endif

                        @if(Auth::user()->user_type==1)
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
