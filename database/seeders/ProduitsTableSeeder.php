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
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby cognac marine en cuir";
        $produit->prix_ht = 89.90;
        $produit->description = "Chaussures de ville en cuir cognac et bleu marine";
        $produit->photo_principale = "chaussures2.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby marine en cuir";
        $produit->prix_ht = 89.90;
        $produit->description = "Chaussures de ville en cuir bleu marine";
        $produit->photo_principale = "chaussures3.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby fluchos camel en cuir";
        $produit->prix_ht = 119;
        $produit->description = "Chaussures de ville en cuir camel";
        $produit->photo_principale = "chaussures4.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby marron en cuir";
        $produit->prix_ht = 59.90;
        $produit->description = "Chaussures de ville en cuir marron";
        $produit->photo_principale = "chaussures5.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Bottes marron en cuir fourré";
        $produit->prix_ht = 105;
        $produit->description = "Bottes en cuir marron fourré";
        $produit->photo_principale = "chaussures6.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Chelsea bottes cognac en cuir cousu blake";
        $produit->prix_ht = 149.90;
        $produit->description = "Bottes cognac en cuir ";
        $produit->photo_principale = "chaussures7.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby noir en cuir";
        $produit->prix_ht = 89.90;
        $produit->description = "Chaussures de ville en cuir noir embossé";
        $produit->photo_principale = "chaussures8.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Derby marine en cuir";
        $produit->prix_ht = 89.90;
        $produit->description = "Chaussures de ville en cuir bleu marine";
        $produit->photo_principale = "chaussures9.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Lot de 2 blouses bébé fille";
        $produit->prix_ht = 25.90;
        $produit->description = "Blouses pour bébé fille";
        $produit->photo_principale = "blousef1.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "PintoDiBlu";
        $produit->prix_ht = 109.90;
        $produit->description = "Bottines marron femme en cuir";
        $produit->photo_principale = "chaussuresf1.jpg";
        $produit->category_id = 2;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Tamaris";
        $produit->prix_ht = 89.99;
        $produit->description = "Bottines marron femme en cuir";
        $produit->photo_principale = "chaussuresf1.jpg";
        $produit->category_id = 2;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Costumes Hommes bleu";
        $produit->prix_ht = 85.23;
        $produit->description = "Costumes Royal Bleu Groomsmen";
        $produit->photo_principale = "costumes1.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Veste de costume bleu ciel";
        $produit->prix_ht = 169.99;
        $produit->description = "CVeste de costume slim Prince de Galles - Bleu Ciel";
        $produit->photo_principale = "costumes2.jpg";
        $produit->category_id = 1;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Pantalon cargo";
        $produit->prix_ht = 32.99;
        $produit->description = "NITBAMGO PANT - Pantalon cargo";
        $produit->photo_principale = "pantag1.jpg";
        $produit->category_id = 3;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "T-shirt à manches longues";
        $produit->prix_ht = 21.95;
        $produit->description = "Levi's - T-shirt à manches longues";
        $produit->photo_principale = "pullg1.jpg";
        $produit->category_id = 3;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "BATWING SCREENPRINT HOODIE - Sweat à capuche";
        $produit->prix_ht = 44.95;
        $produit->description = "Levi's - Sweat à capuche";
        $produit->photo_principale = "pullg2.jpg";
        $produit->category_id = 3;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Pyjama à rayures bébé en velours";
        $produit->prix_ht = 29.90;
        $produit->description = "Dors-bien à rayures bébé en velours bleu et blanc";
        $produit->photo_principale = "pyjamag1.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "Pyjama Paris bébé en côte";
        $produit->prix_ht = 19.90;
        $produit->description = "Dors-bien Paris bébé en côte blanc et bleu";
        $produit->photo_principale = "pyjamag2.jpg";
        $produit->category_id = 4;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "GIRL - Robe en jersey";
        $produit->prix_ht = 32.95;
        $produit->description = "Robe en jersey rose et noir";
        $produit->photo_principale = "robef1.jpg";
        $produit->category_id = 3;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "ADELE - Sac à main";
        $produit->prix_ht = 59.95;
        $produit->description = "Sac à main marron";
        $produit->photo_principale = "sac1.jpg";
        $produit->category_id = 5;
        $produit->save();

        $produit= new \App\Models\Produit();
        $produit->nom = "POCKET FRONT SHOPPER - Sac à main";
        $produit->prix_ht = 25.99;
        $produit->description = "Sac à main marron et noir";
        $produit->photo_principale = "sac2.jpg";
        $produit->category_id = 3;
        $produit->save();
    }
}
