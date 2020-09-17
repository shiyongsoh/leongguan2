@extends('layouts.kiosk')
@section('content')
<div class="container">
<a href='/food/1234' style="text-decoration: none;">
<div class="row">
  <div class="col">

    <div class="container">
    <iframe width="800" height="600" src="https://www.youtube.com/embed/QJ7VhfgpF4I?autoplay=1&loop=1&mute=1&controls=0">
</iframe>
<!-- <iframe width="759" height="506" src="https://www.youtube.com/embed/vQhqikWnQCU?&autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
      <!-- <img src='{{--asset("storage/img/kiosk/LG_logo.svg")--}}'> -->
    </div>
  </div>
  <div class="col my-auto">

    <div class="container">
      <h3 style='color:#0a4537; '>Freshly made noodles</h3>
      <h1 style='color:#0a4537'>Now at your doorstep!</h1>
      <h6 style='color:#0a4537'>Touch me to continue!</h6>
    </div>
  </div>
</div>
</a>
</div>


@endsection