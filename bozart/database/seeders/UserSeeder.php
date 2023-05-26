<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use App\Models\Artiste;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* ADMINS */
        User::create([
            'nom' => 'OUEDRAOGO',
            'prenom' => 'Abdel M. Nassur',
            'genre' => 'homme',
            'telephone' => '64296570',
            'email' => 'abdelnassurr@gmail.com',
            'password' => Hash::make('123123123') ,
        ]);

        User::create([
            'nom' => 'TRORE',
            'prenom' => 'Harouna',
            'genre' => 'homme',
            'telephone' => '77282950',
            'email' => 'harounatraore@gmail.com',
            'password' => Hash::make('123123123') ,
        ]);

        User::create([
            'nom' => 'KIENTEGA',
            'prenom' => 'Francis',
            'genre' => 'homme',
            'telephone' => '57644676',
            'email' => 'kientegafrancis@gmail.com',
            'password' => Hash::make('123123123') ,
        ]);

        Admin::create([
            'user_id' => '1',
        ]);

        Admin::create([
            'user_id' => '2',
        ]);

        Admin::create([
            'user_id' => '3',
        ]);

        /* END ADMINS */


        /* ARTISTES  */
        User::create([
            'nom' => 'Artiste',
            'prenom' => 'test 1',
            'genre' => 'femme',
            'telephone' => '1111111',
            'email' => 'artistetest1@test.com',
            'password' => Hash::make('123123123') ,
        ]);

        User::create([
            'nom' => 'Artiste2',
            'prenom' => 'test 2',
            'genre' => 'homme',
            'actif' => 0,
            'telephone' => '22222222',
            'email' => 'artistetest2@test.com',
            'password' => Hash::make('123123123') ,
        ]);

        User::create([
            'nom' => 'Artiste3',
            'prenom' => 'test 3',
            'genre' => 'homme',
            'telephone' => '33333333',
            'email' => 'artistetest3@test.com',
            'password' => Hash::make('123123123') ,
        ]);

        
        Artiste::create([
            'user_id' => '4',
        ]);

        Artiste::create([
            'user_id' => '5',
        ]);

        Artiste::create([
            'user_id' => '6',
        ]);

        /* END ARTISTES */
        

        /* USERS */
        User::create([
            'nom' => 'User',
            'prenom' => 'test 1',
            'genre' => 'femme',
            'telephone' => '12345678',
            'email' => 'usertest1@test.com',
            'password' => Hash::make('123123123') ,
        ]);

        User::create([
            'nom' => 'User',
            'prenom' => 'test 2',
            'genre' => 'homme',
            'telephone' => '12345679',
            'email' => 'usertest2@test.com',
            'password' => Hash::make('123123123') ,
        ]);

        User::create([
            'nom' => 'User',
            'prenom' => 'test 3',
            'genre' => 'femme',
            'actif' => 0,
            'telephone' => '12345677',
            'email' => 'usertest3@test.com',
            'password' => Hash::make('123123123') ,
        ]);

        /* END USERS */

        
    }
}
