<div class="text-end">
    @can("edit_" . $module_name)
        <x-user.buttons.edit
            route='{!! route("user.$module_name.edit", $data) !!}'
            title="{{ __('Edit') }} {{ ucwords(Str::singular($module_name)) }}"
            small="true"
        />
    @endcan

    <x-user.buttons.show
        route='{!! route("user.$module_name.show", $data) !!}'
        title="{{ __('Show') }} {{ ucwords(Str::singular($module_name)) }}"
        small="true"
    />
</div>
