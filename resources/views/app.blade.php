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
                    <a href="/food/meesoto">
                        <img class="d-block w-100" src="{{ asset('storage/img/meesoto.jpg') }}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block bg-white">
                            <h5 class="text-info">Tasty and easy to prepare meesoto</h5>
                            <p class="text-info">Find Out More >></p>
                        </div>
                        
                    </a>
                </div>
                <div class="carousel-item">
                        <a href="/food/hokkienmeefriednoodle">
                            <img class="d-block w-100" src="{{ asset('storage/img/hokkien_friednoodles.jpg') }}" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block bg-white">
                            <h5 class="text-info">Hokkien Fried Noodles.</h5>
                            <p class="text-info">Find Out More >></p>
                        </div>
                        </a>
                </div>
                <div class="carousel-item">
                    <a href="/food/hokkienmee">
                        <img class="d-block w-100" src="{{ asset('storage/img/hokkien-mee-7.jpg') }}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block bg-white">
                            <h5 class="text-info">hokkien-mee. But better</h5>
                            <p class="text-info">Find Out More >></p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="/food/currychicken">
                        <img class="d-block w-100" src="{{ asset('storage/img/currychixnoodles.jpg') }}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block bg-white">
                            <h5 class="text-info">Curry Chicken, yellow and spicy</h5>
                            <p class="text-info">Find Out More >></p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('storage/img/mee-goreng.jpg') }}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block bg-white">
                            <h5 class="text-info">Authentic Mee Goreng</h5>
                            <p class="text-info">Find Out More >></p>
                        </div
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