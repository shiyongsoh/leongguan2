@extends(Auth::user()->role =='kiosk' ? 'layouts.kiosk' : 'layouts.app');
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

        @foreach($products as $product)
        <tr>

          <td>{{ $product->productName }}</td>
          <td class="{{$product->id}}">{{ $product->amount }}</td>
          <td class="{{$product->id}}">{{$product->amount * $product->price}}</td>
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
  <button onclick="showCaurosel()"><i class="fa fa-bars"></i> caurosel</button>
  <button onclick="showGrid()"><i class="fa fa-sliders"></i> Grid</button>
  <div class="card">
    <div class="card-header">
      {{$paid ?? ''}}
      {{$redeem ?? ''}}
      {{-- dd($products) --}}
    </div>

  </div>
  <div class="container h-50" id='caurosel'>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li class='bg-dark' data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li class='bg-dark' data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li class='bg-dark' data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner container">

        <div class="carousel-item active">
          <div class="mx-auto w-75">
            <div class="row">
              <div class="col">
                <div class="card">
                  <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="h3">Trial Pack Yellow Noodle</p>
                    <p>Find mee. Eat free.</p>
                    <a href="#trialPackYellowNoodles" class="button button--secondary" data-toggle="modal" data-target="#trialPackYellowNoodles">Find Out more >></a>
                    <!-- <p>{{$product1 ?? ''}}</p> -->
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="h3">Trial Pack Kway Teow</p>
                    <p>Find mee. Eat free.</p>
                    <a href="#trialPackYellowNoodles" class="button button--secondary" data-toggle="modal" data-target="#trialPackYellowNoodles">Find Out more >></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item ">

          <div class="mx-auto w-75">
            <div class="row">
              <div class="col">
                <div class="card">
                  <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="h3">Yellow Noodles </p>
                    <p>Bigger than trial packs</p>
                    <p id='2'>Amount ordered {{$products[2]->amount ?? ''}}</p>
                    <a href="#yellowNoodles" class="button button--secondary" data-toggle="modal" data-target="#yellowNoodles">Find Out more >></a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="h3">Char Kway Teow </p>
                    <p>Bigger than trial packs</p>
                    <p id='2'>Amount ordered {{$products[4]->amount ?? ''}}</p>
                    <a href="#charwkwayteow" class="button button--secondary" data-toggle="modal" data-target="#charwkwayteow">Find Out more >></a>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>


        <div class="carousel-item">
          <div class="mx-auto w-75">
            <div class="row">
              <div class="col">
                <div class="card">
                  <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="h3">Yellow Noodle Kit</p>
                    <p>Boil and go.</p>
                    <p id='1'>Amount ordered {{$products[3]->amount ?? ''}}</p>
                    <a href="#kitYellowNoodles" class="button button--secondary" data-toggle="modal" data-target="#kitYellowNoodles">Find Out more >></a>
                    <!-- <p>{{$product1 ?? ''}}</p> -->
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img class="card-img-top" src="{{asset('storage/img/meesoto/meesoto.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="h3">Char Kway Teow Kit</p>
                    <p>Twice the serving, twice the happiness</p>
                    <p id='2'>Amount ordered {{$products[5]->amount ?? ''}}</p>
                    <a href="#kitKwayTeow" class="button button--secondary" data-toggle="modal" data-target="#kitKwayTeow">Find Out more >></a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
      <a class="carousel-control-prev my-auto h-25" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next my-auto h-25" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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
              <a href="#trialPackYellowNoodles" class="button button--secondary" data-toggle="modal" data-target="#trialPackYellowNoodles">Find Out more >></a>
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
              <a href="#trialKwayTeow" class="button button--secondary" data-toggle="modal" data-target="#trialKwayTeow">Find Out more >></a>
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
              <a href="#yellowNoodles" class="button button--secondary" data-toggle="modal" data-target="#yellowNoodles">Find Out more >></a>
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
              <a href="#charwkwayteow" class="button button--secondary" data-toggle="modal" data-target="#charwkwayteow">Find Out more >></a>
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
              <a href="#kitYellowNoodles" class="button button--secondary" data-toggle="modal" data-target="#kitYellowNoodles">Find Out more >></a>
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
              <a href="#kitKwayTeow" class="button button--secondary" data-toggle="modal" data-target="#kitKwayTeow">Find Out more >></a>
            </div>
          </div>
        </div>
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

<div class="modal fade col-md-8" id="yellowNoodles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Yellow Noodles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{asset('storage/img/leong guan normal pack.jpg')}}">
        No Alkali Taste
      </div>
      <div class="modal-footer">
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
</div>

<div class="modal fade col-md-8" id="charwkwayteow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Kway Teow</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{asset('storage/img/leong guan normal pack.jpg')}}">
        Satisfy your crave
      </div>
      <div class="modal-footer">
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
</div>

<div class="modal fade" id="kitYellowNoodles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Yellow noodles kit</h5>
        <p class="modal-subtitle"></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{asset('storage/img/leong guan big pack.jpg')}}">
        Now Comes In a kit with healthy and nutrious ingridients!
      </div>
      <div class="modal-footer">
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
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="kitKwayTeow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Kway Teow kit</h5>
        <p class="modal-subtitle"></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{asset('storage/img/leong guan big pack.jpg')}}">
        Now Comes In a kit with healthy and nutrious ingridients!
      </div>
      <div class="modal-footer">
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
  showCaurosel();
</script>
@endsection