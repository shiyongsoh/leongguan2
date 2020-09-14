@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        Hi {{ Auth::user()->firstname }}
        Please key this into the kiosk you scanned
        <h3 class="text-warning">{{$kioskCode}}</h3>

        </div>
        
    </div>

</div>

@endsection