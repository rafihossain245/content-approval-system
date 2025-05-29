<div class="text-end">
    <a
        href="{{ route("user.$module_name.edit", $data) }}"
        class="btn btn-primary btn-sm mt-1"
        data-toggle="tooltip"
        title="{{ __('Edit') }} {{ ucwords(Str::singular($module_name)) }}"
    >
        <i class="fas fa-wrench"></i>
    </a>
    <a
        href="{{ route("user.$module_name.show", $data) }}"
        class="btn btn-success btn-sm mt-1"
        data-toggle="tooltip"
        title="{{ __('Show') }} {{ ucwords(Str::singular($module_name)) }}"
    >
        <i class="fas fa-tv"></i>
    </a>
</div> 