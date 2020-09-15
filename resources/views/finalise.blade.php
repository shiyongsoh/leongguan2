@if(Auth::User()->role == 'kiosk')
    @extends('layouts.kiosk')
@else
    @extends('layouts.kiosk')
@endif
@section('content')
<div class="">
    <div class="card">
        <div class="card-body">
            {{$paid}}
        </div>
    </div>

</div>
@endsection