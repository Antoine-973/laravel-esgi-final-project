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
        $user->email = Str::random(10).'@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Red';
        $user->email = Str::random(10).'@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Calvin LeTerrible';
        $user->email = Str::random(10).'@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Antoine LeCollectionneur';
        $user->email = Str::random(10).'@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Christian LeDissequeurDePokemon';
        $user->email = Str::random(10).'@gmail.com';
        $user->password = Hash::make('password');
        $user->save();

        $user = new User();
        $user->name = 'Prado LeMaitrePokemon';
        $user->email = Str::random(10).'@gmail.com';
        $user->password = Hash::make('password');
        $user->save();
    }
}
