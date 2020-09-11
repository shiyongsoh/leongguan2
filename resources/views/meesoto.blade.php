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
                            <td>20min</td>
                            <td>45min</td>
                            <td>1h 45min</td>
                        </tr>
                    </table>

                    <!-- receipe and ingridient -->
                    <p class="h3">Ingredients</p>
                    <div class="d-block container m-auto">
                        
                        <p class="h5">For The Soup</h3>
                        <ul class="list-group">
                            <li class="list-group-item">1 whole chicken, about 1.2kg (divide into 4)</li>
                            <li class="list-group-item">4 onions</li>
                            <li class="list-group-item">6 cloves of garlic</li>
                            <li class="list-group-item">1 inch ginger</li>
                            <li class="list-group-item">1 inch galangal</li>
                            <li class="list-group-item">8 candlenuts (optional)</li>
                            <li class="list-group-item">3 lemongrass, slightly crushed</li>
                            <li class="list-group-item">5 pandan leaves</li>
                            <li class="list-group-item">4 tbsp Soto or soup mix</li>
                            <li class="list-group-item">1 stick of cinnamon</li>
                            <li class="list-group-item">2 chicken cube (optional)</li>
                            <li class="list-group-item">4L water</li>
                            <li class="list-group-item">1kg of yellow noodles or vermicelli</li>
                            <li class="list-group-item">200g beansprouts</li>
                            <li class="list-group-item">½ cup spring onion</li>
                            <li class="list-group-item">½ cup chopped parsley</li>
                            <li class="list-group-item">Fried Shallots</li>
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

                        <p class="h5">For The Chili Condiment</h3>
                        <ol class="list-group">
                            <li class="list-group-item">Blend all of the ingredients till fine.</li>
                        </ol>
                    </div>
                    <div class="d-block container m-auto">
                        
                        <p class="h5">For The Soup</h3>
                        <ol class="list-group">
                            <li class="list-group-item listIt">Blend onion, garlic, ginger, galangal and candlenuts till a fine paste.</li>
                            <li class="list-group-item listIt">Add some oil in a pot and saute the blended ingredients with lemongrass and cinnamon.</li>
                            <li class="list-group-item listIt">Add in the soto/soup mix and cook this for about 5 minutes.</li>
                            <li class="list-group-item listIt">Add the chicken and continue cooking for another 5 minutes.</li>
                            <li class="list-group-item listIt">Pour in the 4L water and add the pandan leaves and chicken cube.</li>
                            <li class="list-group-item listIt">Season with salt and cook for about 20-30 minutes till the chicken is very tender.</li>
                            <li class="list-group-item listIt">Remove chicken from the soup using a pair of tongs. Tear chicken into strips. Set aside</li>
                            <li class="list-group-item listIt">You can either strain the soup or just use a ladle to remove the lemongrass, pandan leaves and cinnamon.</li>
                        </ol>
                    </div>
                    <div class="d-block container m-auto">
                        
                        <h3>To Serve</h3>
                        <ol class="list-group">
                            <li class="list-group-item listIt">In a small pot of boiling water, blanch the yellow noodles/vermicelli till it softens. Strain and place in a bowl.</li>
                            <li class="list-group-item listIt">Blanch the beansprouts for 15 seconds, drain and top it on the noodles.</li>
                            <li class="list-group-item listIt">Top noodles with the soup and chicken strips</li>
                            <li class="list-group-item listIt">Garnish with spring onion, parsley, fried onions, with the chili condiment by the side.</li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
           <img src="{{asset('storage/img/meesoto/meesoto.jpg')}}">
           <img src="{{asset('storage/img/meesoto/yellowNoodles.webp')}}">
           

        </div>
    </div>

</div>
@endsection