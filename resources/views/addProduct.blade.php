@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi {{ Auth::user()->firstname }}</div>

                <div class="card-body">
                    {{ $food ?? '' }}
                </div>
                
            </div>
            <form action="/addProduct" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form__control ">
                    <label class="form__label" for="name">Product name</label>
                    <input type="text" name="productName">
                </div>
                <div class="form__control ">
                    <label class="form__label" for="description">price</label>
                    <input type="float" name="price"></input>
                </div>
                {{$error ??''}}
                <div class="button-wrapper">
          <button type="submit" class="button button--primary">Submit</button>
        </div>
            </form>

        </div>
    </div>

</div>

@endsection