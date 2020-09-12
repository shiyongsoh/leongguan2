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
                            <th scope="col">Total Time</th>
                        </thead>
                        <tr>
                            <td>15min</td>
                            <td>5min</td>
                            <td>20min</td>
                        </tr>
                    </table>

                    <!-- receipe and ingridient -->
                    <p class="h3">Ingredients</p>
                    <div class="d-block container m-auto">
                        
                        <p class="h5">RECIPE INGREDIENTS</p>
                        <ul class="list-group">
                            <li class="list-group-item">Yellow noodles. These noodles are yellow in color and coated with oil.</li>
                            <li class="list-group-item">Dried chilies.</li>
                            <li class="list-group-item">Fried bean curd or firm tofu.</li>
                            <li class="list-group-item">Potato.</li>
                            <li class="list-group-item">Squid.</li>
                            <li class="list-group-item">Bean sprouts.</li>
                            <li class="list-group-item">Eggs</li>
                            <li class="list-group-item">Soy sauce.</li>
                            <li class="list-group-item">Sweet soy sauce or kecap manis.</li>
                            <li class="list-group-item">Ketchup.</li>
                            <li class="list-group-item">Fresh limes.</li>
                        </ul>
                    </div>
                    <p class="h3">Instructions</p>
                    <hr>
                    <div class="d-block container m-auto">
                        
                        <ol class="list-group">
                            <li class="list-group-item listIt">Combine all the ingredients in Chili Paste and blend well using a food processor.</li>
                            <li class="list-group-item listIt">Heat a wok and add "tumis" or stir fry the Chili Paste until the oil separates from chili. Set aside.</li>
                            <li class="list-group-item listIt">In a small bowl, combine all the ingredients of the Sauce together. Set aside.</li>
                            <li class="list-group-item listIt">Heat up a wok on high heat and add 2 tablespoons of cooking oil. Add the garlic, 3 tablespoons of Chili Paste, potatoes, bean curd and squid. Stir fry until fragrant. Add the yellow noodles and the Sauce and continue stirring. Push the noodles to the side of the wok.</li>
                            <li class="list-group-item listIt">Add the remaining 1/2 tablespoon cooking oil and crack the eggs on top of the oil. Scramble the eggs and mix in with the noodles. Add the bean sprouts and quick stir for about 1 minute.</li>
                            <li class="list-group-item listIt">Dish out and garnish with sliced lettuce leaves and lime wedges. Squeeze some lime juice all over the noodles before serving.</li>
                        </ol>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
           <img src="{{asset('storage/img/mee-goreng.jpg')}}">
           

        </div>
    </div>

</div>
@endsection