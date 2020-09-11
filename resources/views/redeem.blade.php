@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi {{ Auth::user()->firstname }}</div>

                <div class="card-body">
                    <p> {{$redeemStatus}}</p>
                    <h3>you are connected to the kiosk!</h3>
                </div>
                
                
            </div>
           
        </div>
    </div>
    
</div>

@endsection
