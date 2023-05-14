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
                    <h1 class="h3 mb-0 text-gray-800">Data User</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item">DataReport</li>
                    </ol>
                </div>



                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Detail User</h6>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('user.update', $data->id) }}">
                                    @csrf
                                    @method('PATCH')

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" value="{{ $data->nik }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="divisi">Divisi</label>
                                        <input type="text" class="form-control" id="divisi" name="divisi" value="{{ $data->divisi }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
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
