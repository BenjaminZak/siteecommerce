@extends('shop')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Accueil</a></li>
            @if($produit->category->parent !== null)
                <li class="breadcrumb-item"><a href="{{route('voir_produits_par_cat',['id'=>$produit->category->parent->id])}}">{{$produit->category->parent->nom}}</a></li>
            @endif
            <li class="breadcrumb-item active" aria-current="page"><a href="{{route('voir_produits_par_cat',['id'=>$produit->category->id])}}">{{$produit->category->nom}}</a></li>
        </ol>
    </nav>
    <main role="main">


        <div class="container">


            <div class="row justify-content-between">

                <div class="col-6">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{asset('produits/'.$produit->photo_principale)}}" alt="Card image cap">

                    </div>
                </div>
                <div class="col-6">
                    <h1 class="jumbotron-heading">{{($produit->nom)}}</h1>
                    <h5>{{$produit->prixTTC()}}€</h5>
                    @foreach($produit->tags as $tag)
                        <span class="badge-info">
                        <a class="text-white" href="{{route('voir_produits_par_tag',['id'=>$tag->id])}}">{{$tag->nom}}</a>
                    </span>
                    @endforeach
                    <hr>
                    <form action="{{route('cart_add', ['id'=>$produit->id])}}" method="POST" id="panier_add">
                        @csrf
                        <label for="size">Choisissez votre taille</label>
                        <select name="size" id="size" class="form-control">
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                        </select>

                        <label for="qty">Quantité</label>
                        <input class="form-control" name="qty" id="qty" type="number" value="1">
                    </form>
                    <button type="submit" form="panier_add" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a></button>
                </div>
            </div>
        </div>

    @if( count($produit->recommandations) > 0)
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <h3>Vous aimerez aussi :</h3>
                </div>
                <div class="row">
                    @foreach($produit->recommandations as $produit_recommande)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/'.$produit_recommande->photo_principale)}}" class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="{{route('voir_produit',['id'=>$produit_recommande->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

    </main>
@endsection



