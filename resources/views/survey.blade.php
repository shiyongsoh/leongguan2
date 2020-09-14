@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        Hi {{ Auth::user()->firstname }}

        </div>
        <h4>We would like to hear from you!</h4>
        <form action="/survey" method="POST">
            @csrf

            <label class="form__label" for="age">age</label>
            <input type="number" id="age" name="age"  required>
            Gender
            <label class="form__label" for="male">male</label>
            <input type="radio" id="male" name="gender" value="male" >

            <label class="form__label" for="female">female</label>
            <input type="radio" id="female" name="gender" value="female" >

            <label class="form__label" for="favoriteFood">favorite food</label>
            <input type="text" id="favoriteFood" name="favoriteFood"  required autofocus>

            Subscribe to Newsletter?
            <label class="form__label" for="newsletterYes">yes</label>
            <input type="radio" id="newsletterYes" name="newsletter" value="yes" >

            <label class="form__label" for="newsletterNo">no</label>
            <input type="radio" id="newsletterNo" name="newsletter" value="no" >
            <input type="submit">
        </form>
    </div>

</div>

@endsection