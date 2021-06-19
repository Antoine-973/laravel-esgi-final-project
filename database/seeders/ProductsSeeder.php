<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Cocur\Slugify\Slugify;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slugify = new Slugify();

        $product = new Product();
        $product->title = "Chemise manche courte Gucci";
        $product->subtitle = "Taille m et jamais portée";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Chemise à motif fleur pour homme achetée en Mars";
        $product->price = 45.99;
        $product->category_id = Category::all()->random(1)->first()->id;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->save();

        $product = new Product();
        $product->title = "Bougie Vanille Coco";
        $product->subtitle = "Parfum vanille et noix de coco";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Belle bougie de la marque PartyLite";
        $product->price = 29.00;
        $product->category_id = Category::all()->random(1)->first()->id;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->save();

        $product = new Product();
        $product->title = "Tshirt blanc Nike";
        $product->subtitle = "Taille L jamais porté";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Tshirt de sport neuf pour le sport";
        $product->price = 20.00;
        $product->category_id = Category::all()->random(1)->first()->id;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->save();

        $product = new Product();
        $product->title = "Le seigneur des anneaux - la communauté de l'anneau";
        $product->subtitle = "Edition francaise";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "3 tomes du seigneur des anneaux en format poche";
        $product->price = 15.00;
        $product->category_id = Category::all()->random(1)->first()->id;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->save();

        $product = new Product();
        $product->title = "Chaussure piscine pour enfant";
        $product->subtitle = "Taille 27/28";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Pour la piscine ou la plage";
        $product->price = 2.00;
        $product->category_id = Category::all()->random(1)->first()->id;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->save();
    }
}
