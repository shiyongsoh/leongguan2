@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- Hi {{ Auth::user()->firstname }} -->

        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#">
                        <img class="d-block w-100" src="{{ asset('storage/img/currychixnoodles.jpg') }}" alt="First slide">
                    </a>
                </div>
                <div class="carousel-item">
                        <a href="#">
                            <img class="d-block w-100" src="{{ asset('storage/img/hokkien_friednoodles.jpg') }}" alt="Second slide">
                        </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <img class="d-block w-100" src="{{ asset('storage/img/hokkien-mee-7.jpg') }}" alt="Third slide">
                    </a>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('storage/img/mee-goreng.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>

@endsection