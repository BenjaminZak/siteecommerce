@extends('shop')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item"><a href="#">Films</a></li>
            <li class="breadcrumb-item active" aria-current="page">Les goonies</li>
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
                    <h5>{{number_format($produit->prix_ht,2)}}€</h5>
                        <a href="#" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                    </p>

                </div>
            </div>
        </div>


        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <h3>Vous aimerez aussi :</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/chaussures2.jpg')}}" class="card-img-top img-fluid" alt="Responsive image">

                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/chaussures3.jpg')}}" class="card-img-top img-fluid" alt="Responsive image">

                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img src="{{asset('produits/chaussures4.jpg')}}" class="card-img-top img-fluid" alt="Responsive image">

                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection



