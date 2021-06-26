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
        $category->icon = '<i class="fas fa-female"></i>';
        $category->name = "Femmes";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-male"></i>';
        $category->name = "Hommes";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-child"></i>';
        $category->name = "Enfants";
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-home"></i>';
        $category->name = "Maison";
        $category->save();
    }
}
