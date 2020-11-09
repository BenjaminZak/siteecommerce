<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //$category = new \App\Models\Category();
        //$category->nom = "Films";
        //$category->is_online = 1;
        //$category->save();

        //$category = new \App\Models\Category();
        //$category->nom = "Séries TV";
        //$category->is_online = 1;
        //$category->save();

        //$category = new \App\Models\Category();
        //$category->nom = "Musique";
        //$category->is_online = 1;
        //$category->save();

        //$category = new \App\Models\Category();
        //$category->nom = "Jeux-Vidéos";
        //$category->is_online = 1;
        //$category->save();

        //$category = new \App\Models\Category();
        //$category->nom = "Sport";
        //$category->is_online = 1;
        //$category->save();

        $category = new \App\Models\Category();
        $category->nom = "Chaussures";
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Bottes";
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Costumes";
        $category->is_online = 1;
        $category->parent_id = 1;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Bottes";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Robe";
        $category->is_online = 1;
        $category->parent_id = 2;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Garcon";
        $category->is_online = 1;
        $category->parent_id = 3;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Fille";
        $category->is_online = 1;
        $category->parent_id = 3;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Garcon";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();

        $category = new \App\Models\Category();
        $category->nom = "Fille";
        $category->is_online = 1;
        $category->parent_id = 4;
        $category->save();
    }
}
