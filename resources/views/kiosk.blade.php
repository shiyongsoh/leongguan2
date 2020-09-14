@extends('layouts.app')
@section('content')

<div class="container justify-content-center d-flex">
    <div class="col-md-8">
    <a href='/kiosk/1234'>
        <h5>Click here to continue</h5>
        <img src="{{ asset('storage/img/kioskqrcode.svg') }}">
    </a>
    <form method="POST" action="/receiveCode/1234">
        @csrf
        <label class="form__label" for="customer__password">
        <input type="text" id="kioskCode" name="kioskCode" required autofocus>
        <input type="submit">
    </form>
    <h6 class="text-danger">{{$message}}</h6>
    </div>

@endsection
