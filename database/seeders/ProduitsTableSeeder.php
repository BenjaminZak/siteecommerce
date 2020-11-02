<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $produit= new \App\Models\Produit();
        $produit->nom = "FIFA 21";
        $produit->prix_ht = 69.99;
        $produit->description = "Jeu de football";
        $produit->photo_principale = "fifa21.jpeg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Dragon Ball FighterZ";
        $produit->prix_ht = 11.99;
        $produit->description = "Jeu de combat";
        $produit->photo_principale = "dbfz.jpeg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Dofus";
        $produit->prix_ht = 00.00;
        $produit->description = "Jeu de stagedie";
        $produit->photo_principale = "dofus.png";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Overwatch";
        $produit->prix_ht = 13.99;
        $produit->description = "FPS";
        $produit->photo_principale = "overwatch.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Rocket league";
        $produit->prix_ht = 00.00;
        $produit->description = "Jeu de football, voiture";
        $produit->photo_principale = "rocket.jpeg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Final Fantasy X";
        $produit->prix_ht = 11.99;
        $produit->description = "RPG";
        $produit->photo_principale = "ffx.jpeg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Valorant";
        $produit->prix_ht = 20.00;
        $produit->description = "FPS";
        $produit->photo_principale = "valorant.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Genshin Impact";
        $produit->prix_ht = 00.00;
        $produit->description = "RPG";
        $produit->photo_principale = "genshin.jpeg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "League of Legends";
        $produit->prix_ht = 00.00;
        $produit->description = "Arène de bataille en ligne multijoueur";
        $produit->photo_principale = "lol.jpeg";
        $produit->save();
    }
}
