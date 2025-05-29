@extends("frontend.users.user-master")

@section("title")
    {{ $$module_name_singular->name }}'s Profile
@endsection

@section("content")
        <div class="col-span-2">
            <div class="mb-8 rounded-lg border bg-white p-6 shadow-lg dark:bg-gray-100">
                <h3 class="text-xl font-semibold">Profile</h3>

                <div class="flex justify-between p-4">
                    <div class="">
                        <span class="font-semibold">{{ label_case($field_name = "first_name") }}:</span>
                        <span class="">{{ $$module_name_singular->$field_name }}</span>
                    </div>
                    <div class="">
                        <span class="font-semibold">{{ label_case($field_name = "last_name") }}:</span>
                        <span class="">{{ $$module_name_singular->$field_name }}</span>
                    </div>
                </div>

                @auth
                    @if (auth()->user()->id == $$module_name_singular->id)
                        <div class="flex justify-between p-4">
                            <div class="">
                                <span class="font-semibold">{{ label_case($field_name = "email") }}:</span>
                                <span class="">{{ $$module_name_singular->$field_name }}</span>
                            </div>
                            <div class="">
                                <span class="font-semibold">{{ label_case($field_name = "mobile") }}:</span>
                                <span class="">{{ $$module_name_singular->$field_name }}</span>
                            </div>
                        </div>
                        <div class="flex justify-between p-4">
                            <div class="">
                                <span class="font-semibold">{{ label_case($field_name = "date_of_birth") }}:</span>
                                <span class="">
                                    {{ optional($$module_name_singular->$field_name)->toFormattedDateString() }}
                                </span>
                            </div>
                            <div class="">
                                <span class="font-semibold">{{ label_case($field_name = "gender") }}:</span>
                                <span class="">{{ $$module_name_singular->$field_name }}</span>
                            </div>
                        </div>
                    @endif
                @endauth

                <div class="flex flex-col justify-between p-4">
                    <div class="font-semibold">
                        {{ label_case($field_name = "bio") }}
                    </div>
                    <div class="">
                        {{ $$module_name_singular->$field_name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push("after-scripts")
    <script type="module" src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush