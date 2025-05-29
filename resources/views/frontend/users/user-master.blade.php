<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title") | {{ config("app.name") }}</title>
    <link href="{{ asset("img/favicon.png") }}" rel="shortcut icon" />
    @include("frontend.includes.meta")
    @if (!empty($site_favicon))
        <link rel="icon" href="{{ $site_favicon['img_url'] }}" type="image/png">
        {!! render_favicon_by_id($site_favicon['img_url']) !!}
    @endif
    <!-- favicon -->
    <link rel=icon href="{{ asset('assets/favicon-dashboard.png') }}" sizes="16x16" type="icon/png">
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap5.min.css') }}">
    <!-- animate -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- slick carousel  -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack("after-styles")
</head>

<body>
    <!-- Dashboard area Starts -->
    <div class="body-overlay"></div>

    <div class="dashboard-area dashboard-padding">
        <div class="container-fluid p-0">
            <div class="dashboard-contents-wrapper">
                <div class="dashboard-icon">
                    <div class="sidebar-icon">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                @include('frontend.layouts.users.sidebar')
                <div class="dashboard-right-contents mt-4 mt-lg-0">
                    @include('frontend.layouts.users.top-header')
                    <div class="wrapper-container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard area end -->

    <!-- jquery Migrate -->
    <script src="{{ asset('assets/js/jquery-migrate.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap5.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/sweetalert2.js') }}"></script>
    <!-- toastr cdn -->
    <script src="{{ asset('assets/backend/js/toastr.min.js') }}"></script>
    <!-- Lazy Load Js -->
    <script src="{{ asset('assets/js/jquery.lazy.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/nouislider-8.5.1.min.js') }}"></script>
    <!-- All Plugins two js -->
    <script src="{{ asset('assets/js/plugin-two.js') }}"></script>
    <!-- Nice Scroll -->
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <!-- Calendar js -->
    <script src="{{ asset('assets/js/calendar-bundle.js') }}"></script>
    <!-- Chart Js -->
    @stack('after-scripts')

    <script>
        $(document).on('click', '.swal_delete_button', function(e) {
            e.preventDefault();
            Swal.fire({
                title: '{{ __('Are you sure?') }}',
                text: '{{ __('You would not be able to revert this item!') }}',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).next().find('.swal_form_submit_btn').trigger('click');
                }
            });
        });

        
        function convertToSlug(source, destination) {
            var text = $(source).val();
            $(destination).val(text.toLowerCase().replace("/[~`{}.'\"\!\@\#\$\%\^\&\*\(\)\_\=\+\/\?\>\<\,\[\]\:\;\|\\\]/", "").replace(/ /g, '-'));
        }

        /**
         * Convert name string to slug
         */
        $(function () {
            $("#name").on("keyup", function () {
                convertToSlug('#name', '#slug');
            });
        });

        /*
        ========================================
            media upload btn click
        ========================================
        */

        $(document).on("click", ".media_upload_form_btn", function () {
            // now let's find modal
            let prevModal = $(this).closest(".modal");

            if (prevModal.length > 0) {
                $(document).on("click", ".media_upload_modal_submit_btn , .modal-wrapper .close-select-button", function () {
                    $(".media_upload_modal_submit_btn").closest('.modal-wrapper').hide();
                    prevModal.modal("show");
                })
            }
        });
    </script>

    @yield('script')
</body>

</html>