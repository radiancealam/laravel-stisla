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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Statistik</h4>
                </div>
                <div class="card-body">
                    <div id="myChart"></div>
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        Highcharts.chart('myChart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Emissions to air in Norway'
            },
            subtitle: {
                text: 'Source: ' +
                    '<a href="https://www.ssb.no/en/statbank/table/08940/" ' +
                    'target="_blank">SSB</a>'
            },
            xAxis: {
                categories: [
                    '2010',
                    '2011',
                    '2012',
                    '2013',
                    '2014',
                    '2015',
                    '2016',
                    '2017',
                    '2018',
                    '2019',
                    '2010',
                    '2021'
                ],
                crosshair: true
            },
            yAxis: {
                title: {
                    useHTML: true,
                    text: 'Million tonnes CO<sub>2</sub>-equivalents'
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
                name: 'Oil and gas extraction',
                data: [13.93, 13.63, 13.73, 13.67, 14.37, 14.89, 14.56,
                    14.32, 14.13, 13.93, 13.21, 12.16
                ]

            }, {
                name: 'Manufacturing industries and mining',
                data: [12.24, 12.24, 11.95, 12.02, 11.65, 11.96, 11.59,
                    11.94, 11.96, 11.59, 11.42, 11.76
                ]

            }, {
                name: 'Road traffic',
                data: [10.00, 9.93, 9.97, 10.01, 10.23, 10.26, 10.00,
                    9.12, 9.36, 8.72, 8.38, 8.69
                ]

            }, {
                name: 'Agriculture',
                data: [4.35, 4.32, 4.34, 4.39, 4.46, 4.52, 4.58, 4.55,
                    4.53, 4.51, 4.49, 4.57
                ]

            }]
        });

    </script>
@endpush