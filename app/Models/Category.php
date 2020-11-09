<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // Récupérer la catégorie parent d'une catégorie
    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function childrens() {
        return $this->hasMany(Category::class,'parent_id');
    }


    // Récuperér les produits de la catégorie >> OneToMany 1 catégorie = n produits
    public function produits() {
        return $this->hasMany('App\Models\Produit');
    }

    // Récupérer des produits situés dans une catégorie enfant au travers d'une catégorie parent
    public function produitsChild() {
        return $this->hasManyThrough('App\Models\Produit', 'App\Models\Category', 'parent_id', 'category_id');
    }
}
