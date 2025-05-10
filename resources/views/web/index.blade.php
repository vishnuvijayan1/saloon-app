@extends('web.main')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Mazoon</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row bg__wrap">
                    {{-- <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div class="icon__card bg__1">
                                        <i class="uil-arrow-random"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span
                                            data-plugin="counterup">{{ $total_staffs_count ?? 0 }}</span></h4>
                                    <p class="text-muted mb-0">Total Staffs</p>
                                </div>


                            </div>
                        </div>
                    </div> <!-- end col--> --}}

                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div class="icon__card bg__1">
                                        <i class="uil-arrow-random"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span
                                            data-plugin="counterup">{{ $total_clients_count ?? 0 }}</span></h4>
                                    <p class="text-muted mb-0">Total Clients</p>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div class="icon__card bg__2">
                                        <i class="uil-arrow-random"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span
                                            data-plugin="counterup">{{ $total_invoices_count ?? 0 }}</span></h4>
                                    <p class="text-muted mb-0">Total Invoices</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-4">

                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div class="icon__card bg__3">
                                        <i class="uil-arrow-random"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $total_sales_amount ?? 0}}</span></h4>
                                    <p class="text-muted mb-0">Total Sales</p>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-md-6 col-xl-4">

                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div class="icon__card bg__4">
                                        <i class="uil-arrow-random"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $total_air_port_sale ?? 0}}</span></h4>
                                    <p class="text-muted mb-0">Air Port Sales</p>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-md-6 col-xl-4">

                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div class="icon__card bg__5">
                                        <i class="uil-arrow-random"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $total_sea_port_sale ?? 0}}</span></h4>
                                    <p class="text-muted mb-0">Sea Port Sales</p>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-md-6 col-xl-4">

                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div class="icon__card bg__6">
                                        <i class="uil-arrow-random"></i>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{ $total_border_port_sale ?? 0}}</span></h4>
                                    <p class="text-muted mb-0">Border Port Sales</p>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end">
                                    <div class="dropdown">
                                        {{-- <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton5"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a> --}}

                                        {{-- <div class="dropdown-menu dropdown-menu-end"
                                        aria-labelledby="dropdownMenuButton5">
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                    </div> --}}
                                    </div>
                                </div>
                                <h4 class="card-title mb-4">Sales Overview</h4>

                                <div class="mt-1">
                                    {{-- <ul class="list-inline main-chart mb-0">
                                    <li class="list-inline-item chart-border-left me-0 border-0">
                                        <h3 class="text-primary">$<span data-plugin="counterup">2,371</span><span
                                                class="text-muted d-inline-block font-size-15 ms-3">Income</span></h3>
                                    </li>
                                    <li class="list-inline-item chart-border-left me-0">
                                        <h3><span data-plugin="counterup">258</span><span
                                                class="text-muted d-inline-block font-size-15 ms-3">Sales</span>
                                        </h3>
                                    </li>
                                    <li class="list-inline-item chart-border-left me-0">
                                        <h3><span data-plugin="counterup">3.6</span>%<span
                                                class="text-muted d-inline-block font-size-15 ms-3">Conversation
                                                Ratio</span></h3>
                                    </li>
                                </ul> --}}
                                </div>

                                <div class="mt-3">
                                    <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    {{-- // <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script> --}}
    <script>
     fetch('/sales-analytics-data')
    .then(response => response.json())
    .then(data => {
        var totalSales = data.salesData;
        const salesData = totalSales.map(item => ({
            x: item.x,
            y: item.y
        }));
        console.log(salesData)

        const options = {
            chart: {
                type: 'line',
                stacked: !1,
                height: 339,

                // Specify colors for each series
                colors: ['#008FFB'],
            },
            series: [{
                name: 'Total Sales',
                data: salesData,
                // Set the curve property to smooth the lines
                curve: 'smooth'
            }],
            fill:{
                opacity:[.85,.25,1],
                gradient:{
                        inverseColors:!1,
                        shade:"light",
                        type:"vertical",
                        opacityFrom:.85,
                        opacityTo:.55,
                        stops:[0,100,100,100]
                }
            },
            markers:{size:0},
            xaxis:{type:"datetime"},
            yaxis:{title:{text:"Points"}},
            grid: {
                borderColor: "#f1f1f1"
            },
            tooltip:{
                shared:!0,
                intersect:!1,
                // y:{formatter:function(e){return void 0!==e?e+" cash":e}},
            }
        };

            // Other configuration options...
        // };

        const chart = new ApexCharts(document.querySelector("#sales-analytics-chart"), options);
        chart.render();
    })
    .catch(error => console.log('Error fetching sales data:', error));




    </script>
@endsection
