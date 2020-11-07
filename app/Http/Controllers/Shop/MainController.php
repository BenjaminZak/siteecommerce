<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        // SELECT * FROM produits;
        $produits = Produit::all();
        // dd($produits);

        return view('shop.index',compact('produits'));
    }


    public function produit(Request $request){
        // echo 'page produit';
        // SELECT * FROM produits WHERE id = ?
        //dd($request->id);
        $produit = Produit::find($request->id);




        return view('shop.produit', compact('produit'));

    }
}
