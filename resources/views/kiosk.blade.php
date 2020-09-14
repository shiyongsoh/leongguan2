@extends('layouts.app')
@section('content')

<div class="container justify-content-center d-flex">
    <div class="col-md-8">
    <a href='/kiosk/1234'>
        <h5>Click here to continue</h5>
        <img src="{{ asset('storage/img/kioskqrcode.svg') }}">
    </a>
    
    </div>

@endsection
