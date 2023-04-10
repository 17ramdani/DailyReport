@extends('layout.header')

@section('content')
<div id="wrapper">
    @include('layout.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content m-5">
            @include('layout.navbar')
            @include('sweetalert::alert')
            <div class="container-fluid" id="container-wrapper">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Part Number</th>
                            <th>Desc. Name Part</th>
                            <th>Batch Number</th>
                            <th>Output</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reportDetails as $index => $reportDetail)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $reportDetail->part_number }}</td>
                            <td>{{ $reportDetail->desc_name_part }}</td>
                            <td>{{ $reportDetail->batch_number }}</td>
                            <td>{{ $reportDetail->output }}</td>
                            <td>{{ $reportDetail->description }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
        @include('layout.footer')
    </div>
</div>
@endsection
