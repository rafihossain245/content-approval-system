@extends("frontend.users.user-master")
@section('site-title')
    {{ __('Dashboard') }}
@endsection
{{-- @section('style')
    <x-media.css />
    <x-datatable.css />
    <x-bulk-action.css />
@endsection --}}

@section('content')
    <div class="dashboard-profile-inner">
        <div class="row g-4 justify-content-center">
            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para ff-rubik"> {{ __('Current Balance') }} </span>
                            <h2 class="order-titles">  </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-tasks"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> {{ __('Pending Balance') }} </span>
                            <h2 class="order-titles">  </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-file-invoice-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">

                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para ff-rubik"> {{ __('Order Completed Balance') }} </span>
                            <h2 class="order-titles"> </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-handshake"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para ff-rubik"> {{ __('Total Earning') }} </span>
                            <h2 class="order-titles">  </h2>
                        </div>
                        <div class="icon">
                            <i class="las la-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para"> {{ __('Total Product') }} </span>
                            {{-- <h2 class="order-titles"> {{ $total_product }} </h2> --}}
                        </div>
                        <div class="icon">
                            <i class="las la-file-invoice-dollar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">

                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para ff-rubik"> {{ __('Total Campaign') }} </span>
                            {{-- <h2 class="order-titles"> {{ $totalCampaign }} </h2> --}}
                        </div>
                        <div class="icon">
                            <i class="las la-handshake"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para ff-rubik"> {{ __('Total Order') }} </span>
                            {{-- <h2 class="order-titles"> {{ $totalOrder }} </h2> --}}
                        </div>
                        <div class="icon">
                            <i class="las la-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-sm-6 orders-child">
                <div class="single-orders">
                    <div class="orders-shapes">
                    </div>
                    <div class="orders-flex-content">
                        <div class="contents">
                            <span class="order-para ff-rubik"> {{ __('Success Order') }} </span>
                            {{-- <h2 class="order-titles"> {{ $successOrder }} </h2> --}}
                        </div>
                        <div class="icon">
                            <i class="las la-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="fs-4 fw-semibold">89.9%</div>
                        <div>Widget title</div>
                        <div class="progress progress-thin my-2">
                            <div
                                class="progress-bar bg-success"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <small class="text-medium-emphasis">Widget helper text</small>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="fs-4 fw-semibold">12.124</div>
                        <div>Widget title</div>
                        <div class="progress progress-thin my-2">
                            <div
                                class="progress-bar bg-info"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <small class="text-medium-emphasis">Widget helper text</small>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="fs-4 fw-semibold">$98.111,00</div>
                        <div>Widget title</div>
                        <div class="progress progress-thin my-2">
                            <div
                                class="progress-bar bg-warning"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <small class="text-medium-emphasis">Widget helper text</small>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="fs-4 fw-semibold">2 TB</div>
                        <div>Widget title</div>
                        <div class="progress progress-thin my-2">
                            <div
                                class="progress-bar bg-danger"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <small class="text-medium-emphasis">Widget helper text</small>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->

        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-primary mb-4 text-white">
                    <div class="card-body">
                        <div class="fs-4 fw-semibold">89.9%</div>
                        <div>Widget title</div>
                        <div class="progress progress-white progress-thin my-2">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <small class="text-medium-emphasis-inverse">Widget helper text</small>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-warning mb-4 text-white">
                    <div class="card-body">
                        <div class="fs-4 fw-semibold">12.124</div>
                        <div>Widget title</div>
                        <div class="progress progress-white progress-thin my-2">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <small class="text-medium-emphasis-inverse">Widget helper text</small>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-danger mb-4 text-white">
                    <div class="card-body">
                        <div class="fs-4 fw-semibold">$98.111,00</div>
                        <div>Widget title</div>
                        <div class="progress progress-white progress-thin my-2">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <small class="text-medium-emphasis-inverse">Widget helper text</small>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-info mb-4 text-white">
                    <div class="card-body">
                        <div class="fs-4 fw-semibold">2 TB</div>
                        <div>Widget title</div>
                        <div class="progress progress-white progress-thin my-2">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            ></div>
                        </div>
                        <small class="text-medium-emphasis-inverse">Widget helper text</small>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->

        <div class="row">
            <div class="col-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-3">
                        <div class="bg-primary me-3 p-3 text-white">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                        <div>
                            <div class="fs-6 fw-semibold text-primary">$1.999,50</div>
                            <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                        </div>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="#">
                            <span class="small fw-semibold">View More</span>
                            <i class="fa-solid fa-circle-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-3">
                        <div class="bg-info me-3 p-3 text-white">
                            <i class="fa-solid fa-laptop"></i>
                        </div>
                        <div>
                            <div class="fs-6 fw-semibold text-info">$1.999,50</div>
                            <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                        </div>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="#">
                            <span class="small fw-semibold">View More</span>
                            <i class="fa-solid fa-circle-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-3">
                        <div class="bg-warning me-3 p-3 text-white">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div>
                            <div class="fs-6 fw-semibold text-warning">$1.999,50</div>
                            <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                        </div>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="#">
                            <span class="small fw-semibold">View More</span>
                            <i class="fa-solid fa-circle-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-6 col-lg-3">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center p-3">
                        <div class="bg-danger me-3 p-3 text-white">
                            <i class="fa-regular fa-bell"></i>
                        </div>
                        <div>
                            <div class="fs-6 fw-semibold text-danger">$1.999,50</div>
                            <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                        </div>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="#">
                            <span class="small fw-semibold">View More</span>
                            <i class="fa-solid fa-circle-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
    </div>
@endsection

@section('script')
    {{-- <x-datatable.js />
    <x-media.js />
    <x-table.btn.swal.js /> --}}

    @php
        $monthName = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $monthArray = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $weekName = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        $weekArray = [0, 0, 0, 0, 0, 0, 0];
        
    @endphp
    <script>
        new Chart(document.getElementById("bar-chart"), {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', "Mar", 'Apr', 'May', "Jun", "July", 'Aug', "Sep", 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: "Statement",
                    backgroundColor: "#e9edf7",
                    data: [
                        @foreach ($monthArray as $value)
                            {{ $value }},
                        @endforeach
                    ],
                    barThickness: 15,
                    hoverBackgroundColor: '#05cd99',
                    hoverBorderColor: '#05cd99',
                    borderRadius: 5,
                    minBarLength: 0,
                    indexAxis: "x",
                    pointStyle: 'star',
                }, ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        new Chart(document.getElementById("line-chart"), {
            type: 'line',
            data: {
                labels: ['Sun', 'Mon', "Tue", 'Wed', 'Thu', "Fri", "Sat"],
                datasets: [{
                    data: [
                        @foreach ($weekArray as $value)
                            {{ $value }},
                        @endforeach
                    ], //[265, 270, 268, 272, 270, 267, 270],
                    label: "Earnings",
                    borderColor: "#05cd99",
                    borderWidth: 2,
                    fill: true,
                    backgroundColor: 'rgba(5, 205, 153,.08)',
                    fillBackgroundColor: "#f9503e",
                    pointBorderWidth: 2,
                    pointBackgroundColor: '#fff',
                    pointRadius: 3,
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "#05cd99",
                }, ]
            },
        });
    </script>
@endsection
