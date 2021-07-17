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
        $category->icon = 'bi bi-puzzle-fill';
        $category->name = "Feu";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-tint';
        $category->name = "Eau";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-leaf';
        $category->name = "Feuille";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-moon';
        $category->name = "Ténèbre";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-ghost';
        $category->name = "Esprit";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-wave-square';
        $category->name = "Psy";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-bug';
        $category->name = "Insecte";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-bolt';
        $category->name = "Electrique";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-feather-alt';
        $category->name = "Vol";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-hand-rock';
        $category->name = "Combat";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-star';
        $category->name = "Normal";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-cogs';
        $category->name = "Acier";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-cookie';
        $category->name = "Roche";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-globe-americas';
        $category->name = "Sol";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-skull-crossbones';
        $category->name = "Poison";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-ice-cream';
        $category->name = "Glace";
        $category->save();

        $category = new Category();
        $category->icon = 'fas fa-dragon';
        $category->name = "Dragon";
        $category->save();

        $category = new Category();
        $category->icon = 'fab fa-accessible-icon';
        $category->name = "Différent";
        $category->save();
    }
}
