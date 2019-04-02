<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'login' => Str::random(10),
            'role' => 'admin',
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('chambres')->insert([
            'label' => 'Chambre 784',
            'description' => 'Une superbe chambre pour se detendre au max.',
            'prix' => 15000,
            'available' => true,
        ]);

        DB::table('chambres')->insert([
            'label' => 'Chambre 10',
            'description' => 'Optimale, climatisé, le reve sur terre.',
            'prix' => '7000',
            'available' => false,
        ]);

        DB::table('image_chambres')->insert([
            'chambre_id' => '1',
            'url' => 'imagePrincipale_Chambre 784.jpg',
        ]);

        DB::table('image_chambres')->insert([
            'chambre_id' => '2',
            'url' => 'imagePrincipale_Chambre 10.jpg',
        ]);

        DB::table('image_chambres')->insert([
            'url' => 'non assigne_1.jpg',
        ]);

        DB::table('image_chambres')->insert([
            'url' => 'non assigne_2.jpg',
        ]);
    }
}
