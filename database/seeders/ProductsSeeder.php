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
        $product->title = "Grotadmor";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Très fort au combat";
        $product->price = 45.99;
        $product->category_id = 15;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Pikatchoum";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Il est bien pour charger votre telephone";
        $product->price = 29.00;
        $product->category_id = 8;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Bulchelou";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Peut vous raffraichir avec ses feuilles";
        $product->price = 29.00;
        $product->category_id = 3;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Salam eche";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Déjà utilisé 5 fois pour des barbuc";
        $product->price = 29.00;
        $product->category_id = 1;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Dragonfeu";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Permet d'éviter les problemes de RER B";
        $product->price = 100.00;
        $product->category_id = 1;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Tortuetank";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Bonne douche";
        $product->price = 15.00;
        $product->category_id = 2;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Chenipanpanpanpan";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "A ne pas confondre avec autre chose";
        $product->price = 1.00;
        $product->category_id = 3;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Roux cool";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "On dirait un pigeon";
        $product->price = 5.00;
        $product->category_id = 9;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Rattata";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Capturé à Chatelet";
        $product->price = 5.00;
        $product->category_id = 11;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Le blaireau";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Il sert à rien";
        $product->price = 5.00;
        $product->category_id = 14;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Rondoudou";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "A déjà gagné The Voice mais chante sans arret";
        $product->price = 500.00;
        $product->category_id = 18;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Tonpiqueur";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Peut détruire le jardin du voison que vous n'aimez pas";
        $product->price = 45.00;
        $product->category_id = 14;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Ferosinge";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Il peut vous gratter le dos";
        $product->price = 45.00;
        $product->category_id = 10;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Mackogneur";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Très musclé et impressionnant, il a volé ma copine";
        $product->price = 4.00;
        $product->category_id = 10;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Racaillou";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Belle décoration pour le jardin";
        $product->price = 4.00;
        $product->category_id = 13;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Ramoloss";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Il est flemmard";
        $product->price = 4.00;
        $product->category_id = 2;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Grotadmorve";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Il pu trop";
        $product->price = 70.00;
        $product->category_id = 15;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Ronflex";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Dort et mange c'est tout";
        $product->price = 40.00;
        $product->category_id = 18;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();

        $product = new Product();
        $product->title = "Trio oiseaux légendaire";
        $product->subtitle = "Presque mort";
        $product->slug = $slugify->slugify($product->title);
        $product->description = "Sulfura/Electhor/Artikodin peuvent chanter les musiques de Migos";
        $product->price = 40.00;
        $product->category_id = 18;
        $product->user_id = User::all()->random(1)->first()->id;
        $product->image = "pikatchoum.jpg";
        $product->save();
    }
}
