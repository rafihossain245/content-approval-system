@extends("frontend.users.user-master")

@section("title")
    {{ __($module_action) }} {{ __($module_title) }}
@endsection

@section("breadcrumbs")
    <x-user.breadcrumbs>
        <x-user.breadcrumb-item route='{{ route("user.$module_name.index") }}' icon="{{ $module_icon }}">
            {{ __($module_title) }}
        </x-user.breadcrumb-item>
        <x-user.breadcrumb-item type="active">{{ __($module_action) }}</x-backend.breadcrumb-item>
    </x-user.breadcrumbs>
@endsection

@section("content")
    <x-user.layouts.edit
        :data="$$module_name_singular"
        :module_name="$module_name"
        :module_path="$module_path"
        :module_title="$module_title"
        :module_icon="$module_icon"
        :module_action="$module_action"
    />
@endsection
