@extends(Auth::user()->role =='kiosk' ? 'layouts.kiosk' : 'layouts.app');
@section('content')
<div class="">
    <div class="card">
        <div class="card-body">
            {{$paid}}
        </div>
    </div>

</div>
@if(Auth::User()->role == 'kiosk')
<script>
    setTimeout(function() {
        window.location.href = '/kioskwelcome';
    }, 5000);
</script>
@else
<script>
    setTimeout(function() {
        window.location.href = '/dashboard';
    }, 5000);
@endif
</script>

@endsection