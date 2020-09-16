@extends('layouts.app')
@section('content')
<div class="container">

    <form action='/send/email' method="POST">
    @csrf
        <input type="email" name='email' placeholder="Put mail here"></input>
        <input type="submit">
    </form>
</div>
@endsection