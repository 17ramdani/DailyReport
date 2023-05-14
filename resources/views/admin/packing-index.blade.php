@extends('layout.header')

@section('content')
<div id="wrapper">
    @include('layout.sidebar1')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content m-5">
            @include('layout.navbar')
            @include('sweetalert::alert')
            <div class="container-fluid" id="container-wrapper">

                <div class="card mb-5 mt-5">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset ('style/assets/img/comingsoon.jpg') }}" width="400" height="400" alt="Coming Soon">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layout.footer')
    </div>
</div>
@endsection
