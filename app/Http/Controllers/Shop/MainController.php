<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        // SELECT * FROM produits;
        $produits = Produit::all();
        // dd($produits);
        //$categories = Category::where('is_online',1)->get();

        return view('shop.index',compact('produits'));
    }

    public function produit(Request $request){
        // echo 'page produit';
        // SELECT * FROM produits WHERE id = ?
        //dd($request->id);
        //$categories = Category::where('is_online',1)->get();

        $produit = Produit::find($request->id);

        return view('shop.produit', compact('produit'));

    }

    public function viewByCategory(Request $request){
        // Récuperer toutes les catégories >> is_online == 1
        //$categories = Category::where('is_online',1)->get();
        // SELECT * FROM produits = category_id = $request->id
        // $produits = Produit::where('category_id', $request->id)->get();

        $category = Category::find($request->id);
        dd($category->produitsChild);

        return view('shop.categorie', compact('produits', 'category'));
    }
}
