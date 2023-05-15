@extends('layout.header')

@section('content')
<div id="wrapper">
    @include('layout.sidebar1')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content m-5">
            @include('layout.navbar')
            @include('sweetalert::alert')
            <div class="container-fluid" id="container-wrapper">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">DataTables</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item">DataReport</li>
                    </ol>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                            </div>
                            <div class="table-responsive p-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="{{ route('assembly.index') }}" method="GET" class="d-flex align-items-center">
                                            <div class="form-group mr-3 mb-2">
                                                <label for="tanggal" class="mb-0">Masukkan Tanggal:</label>
                                                <input type="date" id="tanggal" name="tanggal" class="form-control" style="width: 400px;">
                                            </div>
                                            <button class="btn btn-info mt-2" type="submit"><i class="fas fa-filter"></i> Filter</button>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="{{ route('export.excel') }}" method="GET" class="d-flex align-items-center">
                                            <div class="form-group mr-3 mb-2">
                                                <label for="tanggal" class="mb-0">Masukkan Tanggal:</label>
                                                <input type="date" id="tanggal" name="tanggal" class="form-control" style="width: 330px;">
                                            </div>
                                            <button class="btn btn-success mt-2" type="submit"><i class="fas fa-file-excel"></i> Export Excel File</button>
                                        </form>
                                    </div>
                                </div>



                                <table class="table align-items-center table-flush" id="dataTable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Shift</th>
                                            <th>Time</th>
                                            <th>Part Number</th>
                                            <th>Desc. Name Part</th>
                                            <!-- <th>Batch Number</th>
                                            <th>Output</th>
                                            <th>Description</th> -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Shift</th>
                                            <th>Time</th>
                                            <th>Part Number</th>
                                            <th>Desc. Name Part</th>
                                            <!-- <th>Batch Number</th>
                                            <th>Output</th>
                                            <th>Description</th> -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($reportDetails as $reportDetail)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $reportDetail->report->name }}</td>
                                            <td>{{ $reportDetail->report->date }}</td>
                                            <td>{{ $reportDetail->report->shift }}</td>
                                            <td>{{ $reportDetail->report->time }}</td>
                                            <td>{{ $reportDetail->part_number }}</td>
                                            <td>{{ $reportDetail->desc_name_part }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            @include('layout.footer')
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                buttons: [{
                    extend: 'excelHtml5',
                    text: 'Export to Excel',
                    filename: 'data',
                    exportOptions: {
                        columns: ':visible'
                    }
                }]
            });

            $('#exportBtn').click(function() {
                $('#dataTable').DataTable().buttons.exportData();
            });
        });
    </script>
    @endsection
