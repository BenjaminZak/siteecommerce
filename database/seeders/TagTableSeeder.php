<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tag = new \App\Models\Tag();
        $tag->nom = "#Marron";
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->nom = "#Pull";
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->nom = "#Noir";
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->nom = "#Bleu";
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->nom = "#Pantalon";
        $tag->save();

        $tag = new \App\Models\Tag();
        $tag->nom = "#Robe";
        $tag->save();
    }
}
