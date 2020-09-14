@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        Hi {{ Auth::user()->firstname }}
        Please key this into the kiosk you scanned
        <h3 class="text-warning">{{$kioskCode ?? ''}}</h3>
        Click next if you wish to order through your phone after keying in the qr code
        <a href="/kiosk/1234" class="button button--primary">Next</a>
        </div>
        
    </div>

</div>

@endsection