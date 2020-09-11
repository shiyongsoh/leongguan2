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
            <form action="/admin" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form__control ">
                    <label class="form__label" for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div class="form__control ">
                    <label class="form__label" for="description">description</label>
                    <textarea name="description"></textarea>
                </div>
                <div class="form__control ">
                    <label class="form__label" for="recepies">recepies</label>
                    <textarea type="text" name="recepies"></textarea>
                </div>
                <div class="form__control ">
                    <label class="form__label" for="recepies">recepies</label>
                    <input type="file" name="name">
                </div>
                <div class="button-wrapper">
          <button type="submit" class="button button--primary">Submit</button>
        </div>
            </form>

        </div>
    </div>

</div>

@endsection