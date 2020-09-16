@extends(Auth::user()->role =='kiosk' ? 'layouts.kiosk' : 'layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if(!empty($products))
      <table class="table live_updates">
        <thead>
          <th scope="col">Product Name</th>
          <th scope="col">amount</th>
          <th scope="col">SubTotal/Total</th>
        </thead>
        <span id='tableData'>
          @foreach($products as $product)
          <tr>

            <td>{{ $product->productName }}</td>
            <td class="{{$product->id}}">{{ $product->amount }}</td>
            <td class="{{$product->id}}">{{$product->amount * $product->price}}</td>
          </tr>
          @endforeach
        </span>
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

          @if(Auth::User()->role == 'kiosk')
          You may redeem your free trial pack on your phone
          @endif
        </div>

      </div>

    </div>
  </div>
  <div class="card">
    <div class="card-header">
      {{$paid ?? ''}}
      {{$message ?? ''}}
      {{-- dd($products) --}}

    </div>

  </div>

  <!-- //-------------------------------------------------------------------------------------// -->



  <div class="" id='grid'>

    <div class="row container-fluid">
      <div class="col-md-3 my-5">
        <div class="card">
          <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <p class="h3">Trial Pack Yellow Noodles</p>
            <p>Find Mee, eat free!</p>
            <a href="/redeem" class="button button--secondary">Redeem</a>
            <!-- <p>{{$product1 ?? ''}}</p> -->
          </div>
        </div>
      </div>
      <div class="col-md-3 my-5">
        <div class="card">
          <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <p class="h3">Trial Pack Kway Teow</p>
            <p>Taste some Kway Teow.</p>
            <p>Find Mee, eat free!</p>
            <a href="/redeem" class="button button--secondary">Redeem</a>
            <!-- <p>{{$product1 ?? ''}}</p> -->
          </div>
        </div>
      </div>
      <div class="col-md-3 my-5">
        <div class="card">
          <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <p class="h3">Yellow Noodles </p>
            <p>Bigger than trial packs</p>
            <p id='2'>Amount ordered {{$products[2]->amount ?? ''}}</p>
            <form method="POST" action="/buy">
              @csrf
              <div class="form__control ">
                <label class="form__label" for="customer__first-name">Amount</label>
                <input type="number" id="customer__first-name" name="amount">
              </div>
              <input type="hidden" id="customer__first-name" name="productID" value="3">

              <button type="reset" class="btn btn-secondary" data-dismiss="modal">reset</button>
              <button type="submit" class="btn btn-success">Add to cart</button>
            </form>
          </div>
        </div>
      </div>
      <!-- </div>
    <div class="my-5">
      <div class="row my-auto"> -->
      <div class="col-md-3 my-5">
        <div class="card">
          <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <p class="h3">Char Kway Teow </p>
            <p>Bigger than trial packs</p>
            <p id='2'>Amount ordered {{$products[4]->amount ?? ''}}</p>
            <form method="POST" action="/buy">
              @csrf
              <div class="form__control ">
                <label class="form__label" for="customer__first-name">Amount</label>
                <input type="number" id="customer__first-name" name="amount">
              </div>
              <input type="hidden" id="customer__first-name" name="productID" value="5">

              <button type="reset" class="btn btn-secondary" data-dismiss="modal">reset</button>
              <button type="submit" class="btn btn-success">Add to cart</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 my-5">
        <div class="card">
          <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <p class="h3">Yellow Noodle Kit</p>
            <p>Boil and go.</p>
            <p id='1'>Amount ordered {{$products[3]->amount ?? ''}}</p>
            <form method="POST" action="/buy">
              @csrf
              <div class="form__control ">
                <label class="form__label" for="customer__first-name">Amount</label>
                <input type="number" id="customer__first-name" name="amount">
              </div>
              <input type="hidden" id="customer__first-name" name="productID" value="4">

              <button type="reset" class="btn btn-secondary" data-dismiss="modal">reset</button>
              <button type="submit" class="btn btn-success">Add to cart</button>
            </form>
            <!-- <p>{{$product1 ?? ''}}</p> -->
          </div>
        </div>
      </div>
      <div class="col-md-3 my-5">
        <div class="card">
          <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <p class="h3">Char Kway Teow Kit</p>
            <p>Twice the serving, twice the happiness</p>
            <p id='2'>Amount ordered {{$products[5]->amount ?? ''}}</p>
            <form method="POST" action="/buy">
              @csrf
              <div class="form__control ">
                <label class="form__label" for="customer__first-name">Amount</label>
                <input type="number" id="customer__first-name" name="amount">
              </div>
              <input type="hidden" id="customer__first-name" name="productID" value="6">

              <button type="reset" class="btn btn-secondary" data-dismiss="modal">reset</button>
              <button type="submit" class="btn btn-success">Add to cart</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!--cards-->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade col-md-8" id="trialPackYellowNoodles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Trial Pack yellow Noodles</h5>
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

<div class="modal fade col-md-8" id="trialKwayTeow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Trial Pack Kway Teow</h5>
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









<script>
  Echo.channel('leongguan')
    .listen('.purchaseMade', (data) => {
      var tableData = document.getElementById('tableData');
      console.log(data);
      var name, amount, subtotal;

      // for (var resetData = 0; resetData < tableData.length; resetData++) {
      //   tableData.removeChild();
      // }

      for (var i = 0; i < data; i++) {
        console.log(data)
        ''
        name = document.createElement("td");
        name.innerHTML = i.name
        tableData.appendChild(name);
        amount = document.createElement("td");
        amount.innerHTML(i.amount)
        tableData.appendChild(amount);
        subtotal = document.createElement("td");
        subtotal.innerHTML = i.amount * i.price
        tableData.appendChild(subtotal);

      }
    });
</script>
<script>
  var grid = document.getElementById('grid');
  var caurosel = document.getElementById('caurosel');

  function showGrid() {
    grid.style.display = 'block'
    caurosel.style.display = 'none'
  }

  function showCaurosel() {
    grid.style.display = 'none'
    caurosel.style.display = 'block'
  }
  showGrid();
</script>
@endsection