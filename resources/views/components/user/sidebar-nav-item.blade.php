@props(["url" => "/", "icon" => "fa-solid fa-cube", "text" => "Menu", "permission" => "view_backend"])

@can($permission)
    <li class="list {{ request()->url() == $url ? 'active' : '' }}">
        <a href="{{ $url }}">
            <i class="{{ $icon }}"></i>
            &nbsp;{{ $text }}
        </a>
    </li>
@endcan
