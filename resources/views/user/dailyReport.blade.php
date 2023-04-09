@extends('layout.header')

@section('content')
    <div id="wrapper">
        @include('layout.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content m-5">
                @include('layout.navbar')
                @include('sweetalert::alert')
                <div class="container-fluid" id="container-wrapper">

                    <div class="card mb-5 mt-5">
                        <h2 class="card-header text-center m-2">FORM DAILY REPORT ASS</h2>
                        <div class="card-body">
                            <form action="{{ route('report.store') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label for="name">Nama:</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ auth()->user()->name }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="form-group">
                                            <label for="date">Tanggal:</label>
                                            <input type="date" class="form-control" id="date" name="date"
                                                value="{{ date('Y-m-d') }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="shift">Shift:</label>
                                            <select class="form-control" id="shift" name="shift">
                                                <option value="1">Shift 1</option>
                                                <option value="2">Shift 2</option>
                                                <option value="3">Shift 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="time">Time:</label>
                                            <input type="time" class="form-control" id="time" name="time"
                                                value="{{ \Carbon\Carbon::now()->timezone('Asia/Jakarta')->format('H:i') }}">
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Part Number</th>
                                            <th>Desc. Name Part</th>
                                            <th>Batch Number</th>
                                            <th>Output</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" class="form-control" name="part_number[]" required>
                                            </td>
                                            <td><input type="text" class="form-control" name="desc_name_part[]"></td>
                                            <td><input type="text" class="form-control" name="batch_number[]"></td>
                                            <td><input type="text" class="form-control" name="output[]"></td>
                                            <td><input type="text" class="form-control" name="deskripsi[]"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-success float-right mt-3 mb-3 mr-3">Simpan</button>
                                <button type="button" class="btn btn-primary float-right mt-3 mb-3 mr-3"
                                    id="add-row">Tambah
                                    Baris</button>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
            @include('layout.footer')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#add-row').click(function() {
                var newRow = '<tr>' +
                    '<td><input type="text" class="form-control" name="part_number[]"></td>' +
                    '<td><input type="text" class="form-control" name="desc_name_part[]"></td>' +
                    '<td><input type="text" class="form-control" name="batch_number[]"></td>' +
                    '<td><input type="text" class="form-control" name="output[]"></td>' +
                    '<td><input type="text" class="form-control" name="deskripsi[]"></td>' +
                    '</tr>';

                $('table tbody').append(newRow);
            });
        });
    </script>
@endsection
