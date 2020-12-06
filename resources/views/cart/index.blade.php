@extends('shop')

@section('content')
    <main role="main">
        <section class="py-5">
            <div class="container">
                <h1 class="jumbotron-heading"> <span class="badge badge-primary ">Votre panier </span></h1>
                <table class="table table-bordered table-responsive-sm">
                    <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Qte</th>
                        <th>P.U</th>
                        <th>Total TTC</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($content as $produit)
                    <tr>
                        <td>
                            <img width="110" class="rounded-circle img-thumbnail" src="{{asset('produits/'.$produit->attributes['photo'])}}" alt="">
                            {{$produit->name}}
                            <p>
                                Taille: {{ strtoupper($produit->attributes['size'])}}
                            </p>
                        </td>
                        <td>
                            <form action="{{route('cart_del', ['id'=>$produit->id])}}" method="POST" id="panier_del">
                                @csrf
                                <button type="submit" form="panier_del" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Supprimer</a></button>
                            </form>


                        </td>
                        <td>
                            {{ $produit->attributes['prix_ttc'] }} €
                        </td>
                        <td>
                            {{ number_format($produit->attributes['prix_ttc'] * $produit->quantity, 2)}} €
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td>Total HT</td>
                        <td>{{number_format($total_ht_panier, 2)}} €</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td>TVA (20%)</td>
                        <td>{{number_format($tva, 2)}} €</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td>Total TTC</td>
                        <td>{{number_format($total_ttc_panier, 2)}} €</td>
                    </tr>
                    </tfoot>
                </table>
                <a class="btn btn-block btn-outline-dark" href="">Commander</a>
            </div>
        </section>
    </main>
@endsection
