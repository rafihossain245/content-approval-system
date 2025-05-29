<div class="dashboard-left-content">
    <div class="dashboard-close-main">
        <div class="close-bars"> <i class="las la-times"></i> </div>
        <div class="dashboard-top">
            <div class="dashboard-logo">
                <a href="">
                    {{-- @if (get_static_option('site_admin_dark_mode') == 'off')
                        {!! render_image_markup_by_attachment_id(get_static_option('site_logo')) !!}
                    @else
                        {!! render_image_markup_by_attachment_id(get_static_option('site_white_logo')) !!}
                    @endif --}}
                </a>
            </div>
            <div class="dashboard-top-search mt-4">
                <div class="dashboard__bottom__search dashboard-input">
                    <input class="form--control  w-100" type="text" placeholder="Search here..."
                           id="search_sidebarList">
                </div>
            </div>
        </div>
        <div class="dashboard-bottom custom__form mt-4" id="sidbar-menu-wrap">
            <ul class="dashboard-list">
                
                <li class="list {{ request()->routeIs('frontend.dashboard') ? 'active' : '' }}">
                    <a href="{{ route("frontend.dashboard") }}">
                        <i class="ti-view-grid"></i>
                        &nbsp;
                        @lang("Dashboard")
                    </a>
                </li>

                @php
                    $module_name = "users";
                    $text = __("Profile");
                    $icon = "ti-user";
                    $permission = "view_" . $module_name;
                    $url = route("frontend.".$module_name . ".profileEdit");
                @endphp

                <x-user.sidebar-nav-item :permission="$permission" :url="$url" :icon="$icon" :text="$text"/>

                @php
                    $module_name = "posts";
                    $text = __("Posts");
                    $icon = "fa-regular fa-file-lines";
                    $permission = "view_" . $module_name;
                    $url = route("user." . $module_name . ".index");
                @endphp

                <x-user.sidebar-nav-item :permission="$permission" :url="$url" :icon="$icon" :text="$text"/>

                @php
                    $module_name = "categories";
                    $text = __("Categories");
                    $icon = "fa-solid fa-diagram-project";
                    $permission = "view_" . $module_name;
                    $url = route("user." . $module_name . ".index");
                @endphp

                <x-user.sidebar-nav-item :permission="$permission" :url="$url" :icon="$icon" :text="$text" />

                @php
                    $module_name = "tags";
                    $text = __("Tags");
                    $icon = "fa-solid fa-tags";
                    $permission = "view_" . $module_name;
                    $url = route("user." . $module_name . ".index");
                @endphp

                <x-user.sidebar-nav-item :permission="$permission" :url="$url" :icon="$icon" :text="$text" />


                <li class="list">
                    <a href="{{ route("logout") }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        >{{ __('Logout') }}
                    </a>
                </li>

                <form id="logout-form" style="display: none" action="{{ route("logout") }}" method="POST">
                    {{ csrf_field() }}
                </form>
                <li class="list empty"></li>
            </ul>
        </div>
    </div>
</div>
