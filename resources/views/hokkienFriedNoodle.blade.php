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
                    <h5 class="card-title">Hokkien-style fried noodles recipe</h5>
                    <table class="table">
                        <thead>
                            <th scope="col">Prep Time</th>
                            <th scope="col">Cook Time</th>
                            <th scope="col">Total TIme</th>
                        </thead>
                        <tr>
                            <td>10min</td>
                            <td>20min</td>
                            <td>30min</td>
                        </tr>
                    </table>

                    <!-- receipe and ingridient -->
                    <p class="h3">Ingredients</p>
                    <div class="d-block container m-auto">
                        
                        <p class="h5">RECIPE INGREDIENTS</p>
                        <ul class="list-group">
                            <li class="list-group-item">300 grams yellow noodle</li>
                            <li class="list-group-item">40 grams bean sprouts</li>
                            <li class="list-group-item">2 cloves garlic</li>
                            <li class="list-group-item">1/2 stalk scallion</li>
                            <li class="list-group-item">5 prawns</li>
                            <li class="list-group-item">80 grams chicken meat</li>
                            <li class="list-group-item">10 grams red chili</li>
                            
                        </ul>
                        <p class="h5">Seasoning</p>
                        <ul class="list-group">
                            <li class="list-group-item">1/2 teaspoon dark soy sauce</li>
                            <li class="list-group-item">1 teaspoon light soy sauce</li>
                            <li class="list-group-item">1/2 teaspoon salt</li>
                            <li class="list-group-item">1/2 teaspoon sugar</li>
                            <li class="list-group-item">1/2 teaspoon chicken stock granules</li>
                            <li class="list-group-item">1 tablespoon oyster sauce</li>
                            <li class="list-group-item">1/2 cup water</li>
                            <li class="list-group-item">white pepper powder</li>
                            
                            
                        </ul>
                        <p class="h5">MARINADE</p>
                        <ul class="list-group">
                            <li class="list-group-item">1/2 teaspoon salt</li>
                            <li class="list-group-item">1/2 teaspoon sugar</li>
                            <li class="list-group-item">1/2 teaspoon corn starch</li>
                                                    
                            
                        </ul>
                    </div>
                    <p class="h3">Instructions</p>
                    <hr>
                    <div class="d-block container m-auto">
                        
                        <ol class="list-group">
                            <li class="list-group-item listIt">Rinse chicken meat and prawns with water and drain. Add in marinade for 5-10 minutes. Set aside.</li>
                            <li class="list-group-item listIt">Heat up cooking oil. Add in garlic and stir-fry until fragrant.</li>
                            <li class="list-group-item listIt">Add in chicken meat, prawns and stir-fry until they are half-cooked.</li>
                            <li class="list-group-item listIt">Add in bean sprouts, noodles, and do a few quick stirs.</li>
                            <li class="list-group-item listIt">Add in the seasoning, continue to stir and toss the noodles evenly until they are cooked.</li>
                            <li class="list-group-item listIt">Dish out and garnish with shredded chilies and scallion threads. Serve hot.</li>
                        </ol>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
           <img src="{{asset('storage/img/hokkien_friednoodles.jpg')}}">
           <img src="{{asset('storage/img/meesoto/yellowNoodles.webp')}}">
           

        </div>
    </div>

</div>
@endsection