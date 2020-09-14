@extends('layouts.app')
@section('content')
<style>
.listIt {
    display: list-item;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <!-- <img src="{{ asset('storage/img/kioskqrcode.svg') }}"> -->
                <div class="card-body">
                    <h5 class="card-title">Vending machine packs</h5>
                    <table class="table">
                        <thead>
                            <th scope="col">Prep Time</th>
                            <th scope="col">Cook Time</th>
                            <th scope="col">Total TIme</th>
                        </thead>
                        <tr>
                            <td>-</td>
                            <td>5min</td>
                            <td>5min</td>
                        </tr>
                    </table>

                        
                        
                    <p class="h3">Instructions</p>
                    <hr>
                    <div class="d-block container m-auto">
                        
                        <ol class="list-group">
                            <li class="list-group-item listIt">Put all ingridents in one pot</li>
                            <li class="list-group-item listIt">Pour hot water</li>
                            <li class="list-group-item listIt">Wait for 5 mins</li>
                            <li class="list-group-item listIt">Serve</li>
                            
                        </ol>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
           <img src="{{asset('storage/img/hokkien_friednoodles.jpg')}}">
           <img src="{{asset('storage/img/meesoto/yellowNoodles.webp')}}">
           

        </div>
    </div>

</div>
@endsection