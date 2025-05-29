@extends("frontend.users.user-master")

@section("title")
    {{ __($module_action) }} {{ __($module_title) }}
@endsection

@section("breadcrumbs")
    <x-user.breadcrumbs>
        <x-user.breadcrumb-item type="active" icon="{{ $module_icon }}">
            {{ __($module_title) }}
        </x-user.breadcrumb-item>
    </x-user.breadcrumbs>
@endsection

@section("content")
    <x-user.layouts.trash
        :data="$$module_name"
        :module_name="$module_name"
        :module_path="$module_path"
        :module_title="$module_title"
        :module_icon="$module_icon"
    />
@endsection
