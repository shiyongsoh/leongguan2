@extends('layouts.app')
@section('content')
<style>
.listIt {
    display: list-item;
}
</style>
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <!-- <img src="{{ asset('storage/img/kioskqrcode.svg') }}"> -->
                <div class="card-body">
                    <h5 class="card-title">Mee Soto</h5>
                    <table class="table">
                        <thead>
                            <th scope="col">Prep Time</th>
                            <th scope="col">Cook Time</th>
                            <th scope="col">Total TIme</th>
                        </thead>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </table>

                    <!-- receipe and ingridient -->
                    <p class="h3">Ingredients</p>
                    <div class="d-block container m-auto">
                        
                        <p class="h5">RECIPE INGREDIENTS</p>
                        <ul class="list-group">
                            <li class="list-group-item">250 g yellow noodle</li>
                            <li class="list-group-item">250 g white thick rice vermicelli</li>
                            <li class="list-group-item">400 g prawn</li>
                            <li class="list-group-item">350 g squid, sotong</li>
                            <li class="list-group-item">200 g pork belly</li>
                            <li class="list-group-item">40 g green chives</li>
                            <li class="list-group-item">750 ml chicken stock</li>
                            <li class="list-group-item">3 eggs</li>
                            <li class="list-group-item">5 g chopped garlic</li>
                            
                        </ul>
                        <p class="h5">Seasoning</p>
                        <ul class="list-group">
                            <li class="list-group-item">1/2 tablespoon fish sauce</li>
                            <li class="list-group-item">1 dash pepper</li>
                            <li class="list-group-item">1 dash sesame oil</li>
                            
                            
                        </ul>
                    </div>
                    <p class="h3">Instructions</p>
                    <hr>
                    <div class="d-block container m-auto">
                        
                        <ol class="list-group">
                            <li class="list-group-item listIt">Peel the prawn head.  In a hot wok, add a tbsp oil and fry the prawn head until fragrant. Add fried prawn head into chicken stock and boil for 30mins to 1 hour. (I usually reserve the uncooked prawn shells and prawn heads from other dishes and keep them frozen in the freezer)</li>
                            <li class="list-group-item listIt">Add the pork belly into the stock and boil for 45mins. Take out the pork belly and cool. Cut pork belly into strips. ( I am not a big fan of pork belly hence I have omitted this)</li>
                            <li class="list-group-item listIt">Blanch prawns and squid in boiling water. Drain and cut the squid into rings.</li>
                            <li class="list-group-item listIt">Into a hot wok, add 1 tbsp of oil, fry the garlic until fragrant. Add in egg and scramble.</li>
                            <li class="list-group-item listIt">Add in yellow noodle and rice vermicelli. Fry for a few minutes until noodles just begin to sear. (Use high heat)</li>
                            <li class="list-group-item listIt">Add 1/3 of prawn stock and seasoning. Fry until stock is almost dry. Add another 1/3 of prawn stock. Cover wok to braise the noodles on medium low heat. (5 to 7 mins)</li>
                            <li class="list-group-item listIt">Lastly add in prawn, squid, chives and fry together. Add remaining stock, fry for 1 min and plate. Serve with sambal chilli and lime.</li>
                        </ol>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
           <img src="{{asset('storage/img/hokkien-mee-7.jpg')}}">
           <img src="{{asset('storage/img/meesoto/yellowNoodles.webp')}}">
           

        </div>
    </div>

</div>
@endsection