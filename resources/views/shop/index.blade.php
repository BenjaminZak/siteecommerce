@extends('home')
@section('content')
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <!-- {{dump($produits)}} -->
                @foreach($produits as $produit)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="{{asset('produits/'.$produit->photo_principale)}}" width="100%" height="385px">
                                <div class="card-body">
                                    <p class="card-text">{{($produit->nom)}} <br> {{($produit->description)}}</p>
                                    <span class="badge-info">
                                        <a class="text-white" href="{{route('voir_produits_par_cat',['id'=>$produit->category->id])}}">{{$produit->category->nom}}</a>
                                    </span>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="price">{{$produit->prixTTC()}}€</span>
                                        <a href="{{ route('voir_produit',['id'=>$produit->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</div>
@endsection
