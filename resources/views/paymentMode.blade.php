@extends(Auth::user()->role =='kiosk' ? 'layouts.kiosk' : 'layouts.app');
@section('content')
<div class="container">

    <div class="row">

        <div class="card w-25 mx-auto h-50">
            <a href="/pay">


                <i class="fa fa-angle-double-down fa-3x d-flex justify-content-center"></i>
                <img class="card-img-top" src="{{asset('storage/img/kiosk/cash.svg')}}" alt="Card image cap">
                <div class="card-body"></div>
            </a>
        </div>
        <h3 class="my-auto d-flex">pay with?</h3>
        <div class="card w-25 mx-auto h-50">
            <a href="/pay">
                <i class="fa fa-angle-double-down fa-3x d-flex justify-content-center"></i>
                <img class="card-img-top" src="{{asset('storage/img/kiosk/card.svg')}}" alt="Card image cap">
                <div class="card-body"></div>
        </div>
    </div>
</div>
@endsection
