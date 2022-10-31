@extends('layouts.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        </div>
    </div>

    {{-- Card --}}
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Ticket</h4>
                    </div>
                    <div class="card-body">
                        1000
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Ticket Opened</h4>
                    </div>
                    <div class="card-body">
                        300
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Ticket Pending</h4>
                    </div>
                    <div class="card-body">
                        300
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Ticket Closed</h4>
                    </div>
                    <div class="card-body">
                        300
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Statistik --}}
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div id="myColumnChart"></div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div id="myPieChart"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabel Tiket --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tabel Tiket</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Priority</th>
                                    <th>Customer</th>
                                    <th>Problem</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="badge badge-danger">Urgent</div>
                                    </td>
                                    <td>AAAAA</td>
                                    <td>Internet Problem</td>
                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, amet?</td>
                                    <td>
                                        <div class="badge badge-success">Closed</div>
                                    </td>
                                    <td><a href="#" class="btn btn-primary btn-sm">Details</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/modules-datatables.js') }}"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script>
        // Column Chart
        Highcharts.chart('myColumnChart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Frekuensi Troble Ticket'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'Mei',
                    'Jun',
                    'Jul',
                    'Agu',
                    'Sep',
                    'Okt',
                    'Nov',
                    'Des'
                ],
                crosshair: true
            },
            yAxis: {
                title: {
                    useHTML: true,
                    text: 'Total Ticket'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Ticket Opened',
                data: [13.93, 13.63, 13.73, 13.67, 14.37, 14.89, 14.56,
                    14.32, 14.13, 13.93, 13.21, 12.16
                ]

            }, {
                name: 'Ticket Pending',
                data: [10.00, 9.93, 9.97, 10.01, 10.23, 10.26, 10.00,
                    9.12, 9.36, 8.72, 8.38, 8.69
                ]

            }, {
                name: 'Ticket Closed',
                data: [12.24, 12.24, 11.95, 12.02, 11.65, 11.96, 11.59,
                    11.94, 11.96, 11.59, 11.42, 11.76
                ]

            }]
        });

        // Pie Chart
        Highcharts.chart('myPieChart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Persentase Troble Ticket'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Trouble Ticket',
                colorByPoint: true,
                data: [{
                    name: 'Opened',
                    y: 70.67,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Pending',
                    y: 14.77
                }, {
                    name: 'Closed',
                    y: 4.86
                }, ]
            }]
        });
    </script>
@endpush
