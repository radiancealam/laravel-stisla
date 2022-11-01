@extends('layouts.main')

@section('content')
    <div class="section-header">
        <h1>Manage Ticket</h1>
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush
