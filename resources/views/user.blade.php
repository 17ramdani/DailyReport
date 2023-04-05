@extends('layout.header')

@section('content')
<div id="wrapper">
    @include('layout.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('layout.navbar')
            <div class="container-fluid" id="container-wrapper">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Hallo, User!</h1>
                </div>
            </div>
        </div>
        @include('layout.footer')
    </div>
</div>
@endsection