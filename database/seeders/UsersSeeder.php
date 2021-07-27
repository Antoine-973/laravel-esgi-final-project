<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = 'Sacha DuBourgPallette';
        $user->email = 'sacha@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Gandolf de chez SorcierTech';
        $user->email = 'UShallNotPass'.Str::random(1).'@sorciertech.com';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Calvin LeTerrible';
        $user->email = 'calcal'.Str::random(2).'@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Antoine LeCollectionneur';
        $user->email = 'ant.man'.Str::random(2).'@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Christian LeSoigneurDePokemon';
        $user->email = 'jaimelespokemons'.Str::random(2).'@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Prado LeMaitrePokemon';
        $user->email = 'jesuisfort'.Str::random(2).'@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
    }
}
