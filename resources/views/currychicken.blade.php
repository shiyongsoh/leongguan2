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
                            <td>10min</td>
                            <td>30min</td>
                            <td>40min</td>
                        </tr>
                    </table>

                    <!-- receipe and ingridient -->
                    <p class="h3">Ingredients</p>
                    <div class="d-block container m-auto">
                        
                        <p class="h5">For The Soup</h3>
                        <ul class="list-group">
                            <li class="list-group-item">1 tbsp cooking oil</li>
                            <li class="list-group-item">5 shallots peeled and chopped finely</li>
                            <li class="list-group-item">1 packet instant curry sauce</li>
                            <li class="list-group-item">4 sprigs curry leaves</li>
                            <li class="list-group-item">700ml water</li>
                            <li class="list-group-item">2 chicken thighs cut to small pieces</li>
                            <li class="list-group-item">200 grams chicken breast</li>
                            <li class="list-group-item">2 russet potatoes peeled and cut to small chunks</li>
                            <li class="list-group-item">50g tau pok (tofu puffs) sliced vertically to 2 cm length</li>
                            <li class="list-group-item">100g cooked fish cake sliced thinly</li>
                            <li class="list-group-item">200ml coconut milk</li>
                            <li class="list-group-item">200g yellow noodles</li>
                            <li class="list-group-item">chilli powder to taste</li>
                            <li class="list-group-item">salt and/or fish sauce to taste</li>
                        </ul>
                        <p class="h5">For The Soup</h3>
                        <ul class="list-group">
                            <li class="list-group-item">¼ cup bird eye chili (Cili padi)</li>
                            <li class="list-group-item">2 cloves of garlic</li>
                            <li class="list-group-item">¾ cup sweet soy sauce (kicap manis)</li>
                            <li class="list-group-item">2 tbsp of lime juice (From limau kasturi)</li>
                            
                        </ul>
                    </div>
                    <p class="h3">Instructions</p>
                    <hr>
                    <div class="d-block container m-auto">
                        
                        <p class="h5">For The Soup</h3>
                        <ol class="list-group">
                            <li class="list-group-item listIt">In a wok, heat oil and fry the shallots until lightly browned. Add curry sauce and curry leaves, stir fry for a few minutes until fragrant.</li>
                            <li class="list-group-item listIt">Add water and chicken. Simmer for 10 minutes.</li>
                            <li class="list-group-item listIt">Add potatoes and simmer for another 10 minutes, or until the chicken is cooked and potatoes are tender.</li>
                            <li class="list-group-item listIt">Add tau pok and fish cake slices, simmer for 2 minutes.</li>
                            <li class="list-group-item listIt">Reduce heat, stir in the coconut milk and warm the curry. Add chilli powder to taste for extra heat and season to taste with salt and/or fish sauce. If the curry is too thick, add some hot water. It should be slightly soupy.</li>
                            <li class="list-group-item listIt">Take out the cooked chicken and shred to smaller chunks.</li>
                            <li class="list-group-item listIt">Blanch noodles in boiling water and a bit of oil. Drain and portion noodles in serving bowls. Top each bowl with potato, fish cake, tau pok and chicken. Ladle curry gravy over.</li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
           <img src="{{asset('storage/img/currychixnoodles.jpg')}}">
           <img src="{{asset('storage/img/meesoto/yellowNoodles.webp')}}">
           

        </div>
    </div>

</div>
@endsection