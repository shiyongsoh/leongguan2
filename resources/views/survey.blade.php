@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        
        <h4>We would like to hear from you!</h4>
        <form action="/survey" method="POST">
            @csrf

            <label class="form__label" for="age">age</label>
            <input type="number" id="age" name="age"  required>
            Gender
            <label>male <input type="radio" id="male" name="gender" value="male" style="-webkit-appearance: radio;"></label>
            

            <label>female <input type="radio" id="female" name="gender" value="female" style="-webkit-appearance: radio;"></label>
            

            <label class="form__label" for="favoriteFood">favorite food</label>
            <input type="text" id="favoriteFood" name="favoriteFood"  required autofocus>

            Subscribe to Newsletter?
            <label>yes <input type="radio" id="newsletterYes" name="newsletter" style="-webkit-appearance: radio;" value="yes" ></label>
            

            <label>no <input type="radio" id="newsletterNo" name="newsletter" style="-webkit-appearance: radio;" value="no" ></label>
            
            <input type="submit">
        </form>
    </div>

</div>

@endsection