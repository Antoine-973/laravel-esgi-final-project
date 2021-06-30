<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->icon = '<i class="fas fa-fire"></i>';
        $category->name = "Feu";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-tint"></i>';
        $category->name = "Eau";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-leaf"></i>';
        $category->name = "Feuille";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-moon"></i>';
        $category->name = "Ténèbre";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-ghost"></i>';
        $category->name = "Esprit";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-wave-square"></i>';
        $category->name = "Psy";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-bug"></i>';
        $category->name = "Insecte";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-bolt"></i>';
        $category->name = "Electrique";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-feather-alt"></i>';
        $category->name = "Vol";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-hand-rock"></i>s';
        $category->name = "Combat";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-star"></i>';
        $category->name = "Normal";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-cogs"></i>';
        $category->name = "Acier";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-cookie"></i>';
        $category->name = "Roche";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-globe-americas"></i>';
        $category->name = "Sol";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-skull-crossbones"></i>';
        $category->name = "Poison";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-ice-cream"></i>';
        $category->name = "Glace";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-dragon"></i>';
        $category->name = "Dragon";
        $category->save();
    }
}
