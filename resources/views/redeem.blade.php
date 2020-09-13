@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
    @if(!empty($products))
      <table class="table">
        <thead>
          <th scope="col">Product Name</th>
          <th scope="col">amount</th>
          <th scope="col">SubTotal/Total</th>
        </thead>
        
        @foreach($products as $product)
        <tr>

          <td>{{ $product->productName }}</td>
          <td>{{ $product->amount }}</td>
          <td>{{$product->amount * $product->price}}</td>
        </tr>
        @endforeach
        
      </table>
      @endif
      
      @if(!empty($products))
      <a href="/finalise" class="button button--secondary">Finalise payment</a>
      @endif
      <div class="card">
        <div class="card-header">Hi {{ Auth::user()->firstname }}</div>

        <div class="card-body">
          <p> {{$redeemStatus ?? ''}}</p>
          <p> {{$paid ?? ''}}</p>
          <p> {{$debug ?? ''}}</p>
          <!-- <h3>You have:</h3> -->

        </div>


      </div>

    </div>
  </div>

  <div class="row">
  <div class="col-md-3">
      <div class="card">
        <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <p class="h3">Trial Pack</p>
          <p>Find Mee, eat free!</p>
          <a href="#trialPack" class="button button--secondary" data-toggle="modal" data-target="#trialPack">Find Out more >></a>
          <!-- <p>{{$product1 ?? ''}}</p> -->
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <p class="h3">Normal Pack</p>
          <p>Boil and go.</p>
          <a href="#normalPack" class="button button--secondary" data-toggle="modal" data-target="#normalPack">Find Out more >></a>
          <!-- <p>{{$product1 ?? ''}}</p> -->
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <p class="h3">Big Pack</p>
          <p>Twice the serving, twice the happiness</p>
          <a href="#bigPack" class="button button--secondary" data-toggle="modal" data-target="#bigPack">Find Out more >></a>
        </div>
      </div>
    </div>
  </div>
</div>


<!--cards-->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade col-md-8" id="trialPack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Trial Pack</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{asset('storage/img/leong guan normal pack.jpg')}}">
        Contains whole grain noodles from leong guan with no presravtives, fast to prepare and tasty!
      </div>
      <div class="modal-footer">
       <a href="/redeem" class="button button--secondary">Redeem</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade col-md-8" id="normalPack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Normal Pack</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{asset('storage/img/leong guan normal pack.jpg')}}">
        Contains whole grain noodles from leong guan with no presravtives, fast to prepare and tasty!
      </div>
      <div class="modal-footer">
        <form method="POST" action="/buy">
          @csrf
          <div class="form__control ">
            <label class="form__label" for="customer__first-name">Amount</label>
            <input type="number" id="customer__first-name" name="amount">
          </div>
          <input type="hidden" id="customer__first-name" name="productID" value="2">

          <button type="reset" class="btn btn-secondary" data-dismiss="modal">reset</button>
          <button type="submit" class="btn btn-success">Add to cart</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bigPack" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Big Pack</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{asset('storage/img/leong guan big pack.jpg')}}">
        Share it with your crush......After COVID-19
      </div>
      <div class="modal-footer">
        <form method="POST" action="/buy">
          @csrf
          <div class="form__control ">
            <label class="form__label" for="customer__first-name">Amount</label>
            <input type="number" id="customer__first-name" name="amount">
          </div>
          <input type="hidden" id="customer__first-name" name="productID" value="1">

          <button type="reset" class="btn btn-secondary" data-dismiss="modal">reset</button>
          <button type="submit" class="btn btn-success">Add to cart</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection