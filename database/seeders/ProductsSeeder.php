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
        $product->category_id = 2;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "1624134750_baby-boy.png";
        $product->save();

        $product = new Product();
        $product->title = "Bougie Vanille Coco";
        $product->subtitle = "Parfum vanille et noix de coco";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Belle bougie de la marque PartyLite";
        $product->price = 29.00;
        $product->category_id = 4;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "1624134750_baby-boy.png";
        $product->save();

        $product = new Product();
        $product->title = "Tshirt blanc Nike";
        $product->subtitle = "Taille L jamais porté";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Tshirt de sport neuf pour le sport";
        $product->price = 20.00;
        $product->category_id = 2;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "1624134750_baby-boy.png";
        $product->save();

        $product = new Product();
        $product->title = "Le seigneur des anneaux - la communauté de l'anneau";
        $product->subtitle = "Edition francaise";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "3 tomes du seigneur des anneaux en format poche";
        $product->price = 15.00;
        $product->category_id = 4;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "1624134750_baby-boy.png";
        $product->save();

        $product = new Product();
        $product->title = "Blouson stradivarius bleu";
        $product->subtitle = "Taille L";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Article en bon état. Usage unique. Chemisier à manches longues confortable et fluide";
        $product->price = 25.00;
        $product->category_id = 1;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "1624134750_baby-boy.png";
        $product->save();

        $product = new Product();
        $product->title = "Chaussure piscine pour enfant";
        $product->subtitle = "Taille 27/28";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Pour la piscine ou la plage";
        $product->price = 2.00;
        $product->category_id = 3;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "1624134750_baby-boy.png";
        $product->save();

        $product = new Product();
        $product->title = "Jouet transformers Generation Optimus Primes fusion Jetfire";
        $product->subtitle = "Sous blister camion 25cm";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Plus de 24 heures d’autonomie avec le boîtier de charge sans fil";
        $product->price = 205.00;
        $product->category_id = 4;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "1624134750_baby-boy.png";
        $product->save();

        $product = new Product();
        $product->title = "Apple AirPods Pro";
        $product->subtitle = "IOS Phone Control, Microphone Feature";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Pour la piscine ou la plage";
        $product->price = 2.00;
        $product->category_id = 3;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "1624134750_baby-boy.png";
        $product->save();

        $product = new Product();
        $product->title = "Zack Snyder’s Justice League";
        $product->subtitle = "4K Ultra HD + Blu-Ray-Édition boîtier SteelBook";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Bruce Wayne est déterminé à faire en sorte que le sacrifice ultime de Superman ne soit pas vain , pour cela, avec l'aide de Diana Prince il met en place un plan pour recruter une équipe de métahumains afin de protéger le monde d'une menace apocalyptique imminente. La tâche s'avère plus difficile que Bruce ne l'imaginait, car chacune des recrues doit faire face aux démons de son passé et les surpasser pour se rassembler et former une ligue de héros sans précédent. Désormais unis, Batman, Wonder Woman, Aquaman, Cyborg et Flash réussiront-ils à sauver la planète de Steppenwolf, DeSaad, Darkseid et de leurs terribles intentions ?";
        $product->price = 2.00;
        $product->category_id = 4;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "1624134750_baby-boy.png";
        $product->save();

        $product = new Product();
        $product->title = "Sac Chanel";
        $product->subtitle = "Bandoulière";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "En perfecto estado. Con caja y tarjeta de autenticidad Medidas 18 largo x 14 alto x 7 ancho";
        $product->price = 5300.00;
        $product->category_id = 1;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "1624134750_baby-boy.png";
        $product->save();

        $product = new Product();
        $product->title = "Robe idéale été en coton";
        $product->subtitle = "Taille M/38/10";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "1ere main, la couleur porte la fraîcheur. Bonne qualité. A été portée dans de bonnes conditions et très bien entretenue. Une taille 38, une coupe droite, de la dentelle sur manches et épaules, boutons déplaçables, font de cette robe un joli habit.";
        $product->price = 2.00;
        $product->category_id = 1;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "1624134750_baby-boy.png";
        $product->save();
    }
}
