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
                                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                            </div>
                            <div class="table-responsive p-3">
                                <div class="text-left mb-4">
                                    <a href="{{route('user.create')}}" class="btn btn-primary">Tambah User</a>
                                </div>

                                <table class="table align-items-center table-flush" id="dataTable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>NIK</th>
                                            <th>Divisi</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->nik }}</td>
                                                <td>{{ $item->divisi }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>
                                                    <a href="{{ route('user.detail', $item->id) }}" class="btn btn-primary">Edit</a>
                                                    <form action="{{ route('user.delete', $item->id) }}" method="POST" class="d-inline" id="delete-form-{{ $item->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger" onclick="deleteUser ({{ $item->id }})">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>NIK</th>
                                            <th>Divisi</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>

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

        function deleteUser(id) {
            if (confirm("Are you sure you want to delete this user?")) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>
    @endsection
