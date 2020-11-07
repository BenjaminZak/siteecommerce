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
        $produit->nom = "Richelieu marron en cuir";
        $produit->prix_ht = 79.90;
        $produit->description = "Chaussures de ville en cuir marron";
        $produit->photo_principale = "chaussures1.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby cognac marine en cuir";
        $produit->prix_ht = 89.90;
        $produit->description = "Chaussures de ville en cuir cognac et bleu marine";
        $produit->photo_principale = "chaussures2.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby marine en cuir";
        $produit->prix_ht = 89.90;
        $produit->description = "Chaussures de ville en cuir bleu marine";
        $produit->photo_principale = "chaussures3.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby fluchos camel en cuir";
        $produit->prix_ht = 119;
        $produit->description = "Chaussures de ville en cuir camel";
        $produit->photo_principale = "chaussures4.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby marron en cuir";
        $produit->prix_ht = 59.90;
        $produit->description = "Chaussures de ville en cuir marron";
        $produit->photo_principale = "chaussures5.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Bottes marron en cuir fourré";
        $produit->prix_ht = 105;
        $produit->description = "Bottes en cuir marron fourré";
        $produit->photo_principale = "chaussures6.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Chelsea bottes cognac en cuir cousu blake";
        $produit->prix_ht = 149.90;
        $produit->description = "Bottes cognac en cuir ";
        $produit->photo_principale = "chaussures7.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby noir en cuir";
        $produit->prix_ht = 89.90;
        $produit->description = "Chaussures de ville en cuir noir embossé";
        $produit->photo_principale = "chaussures8.jpg";
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby marine en cuir";
        $produit->prix_ht = 89.90;
        $produit->description = "Chaussures de ville en cuir bleu marine";
        $produit->photo_principale = "chaussures9.jpg";
        $produit->save();
    }
}
