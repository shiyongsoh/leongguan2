@extends('layouts.kiosk')
@section('content')
<div class="justify-content-center d-block">
    <div class='row'>
        <div class="container-fluid justify-content-center d-flex">
            <div class="col-md-2 mx-5">
                <div class='card' style="width: 18rem;">
                    <div class="card-body">

                        <form method="POST" action="/receiveCode/1234">
                            @csrf
                            <label class="form__label" for="customer__password">
                                <input type="text" id="kioskCode" name="kioskCode" required autofocus>
                                <input type="submit">
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-md-2 mx-5 my auto">
                <div class='card' style="width: 18rem;border-style:none; ">
                    <div class="card-body">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <a href='/food/1234'>
                            <h4>Click here to continue without scanning</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">

        <h6 class="text-danger">{{$message ?? ''}}</h6>
    </div>
</div>


@endsection