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
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Create User</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('user.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" name="nik" id="nik" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="divisi">Divisi</label>
                                        <input type="text" name="divisi" id="divisi" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
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
