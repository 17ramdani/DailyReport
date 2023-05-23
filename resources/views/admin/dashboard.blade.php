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
                    <h1 class="h3 mb-0 text-gray-800">Jumlah Data</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                </div>


                <div class="row mb-3">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-6 col-md-6 mb-8">
                        <div class="card h-100">
                            <div class="card-body p-5">
                                <div class="row align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Jumlah Data User</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $usersCount }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Earnings (Annual) Card Example -->
                    <div class="col-xl-6 col-md-6 mb-8">
                        <div class="card h-100">
                            <div class="card-body p-5">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Data Report Assembly</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $reportCount }}</div>
                                        <!-- <div class="mt-2 mb-0 text-muted text-xs">
                                            <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                            <span>Since last years</span>
                                        </div> -->
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-sticky-note fa-2x text-success"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New User Card Example -->
                    <div class="col-xl-6 col-md-6 mb-5 mt-5">
                        <div class="card h-100">
                            <div class="card-body p-5">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Data Report Marking</div>
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0</div>
                                        <!-- <div class="mt-2 mb-0 text-muted text-xs">
                                            <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                                            <span>Since last month</span>
                                        </div> -->
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-marker fa-2x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-6 col-md-6 mb-5 mt-5">
                        <div class="card h-100">
                            <div class="card-body p-5">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Data Report Packing</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                        <!-- <div class="mt-2 mb-0 text-muted text-xs">
                                            <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                            <span>Since yesterday</span>
                                        </div> -->
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-box-open fa-2x text-warning"></i>
                                    </div>
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
