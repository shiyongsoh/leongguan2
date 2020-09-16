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
<script>
         setTimeout(function(){
            window.location.href = '/kioskwelcome';
         }, 5000);
      </script>

@endsection