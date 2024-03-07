<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\product;
use App\Models\about;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin',
            'password' => bcrypt('admin'),
            'role_id' => '1'
        ]);

        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        Product::create([
            'name' => 'Americano',
            'slug' => 'americano',
            'price' => 40,
            'description' => 'Biji Kopi pilihan',
            'status' => 1
        ]);
        Product::create([
            'name' => 'Kopi ABC',
            'slug' => 'kopi-abc',
            'price' => 40,
            'description' => 'Biji Kopi pilihan',
            'status' => 2
        ]);
        
        Product::create([
            'name' => 'Kopi Cap panda',
            'slug' => 'kopi-cap-panda',
            'price' => 40,
            'description' => 'Biji Kopi pilihan',
            'status' => 2
        ]);
        
        Product::create([
            'name' => 'Kopi Kapal Api',
            'slug' => 'kopi-kapal-api',
            'price' => 40,
            'description' => 'Biji Kopi pilihan',
            'status' => 2
        ]);
        
        Product::create([
            'name' => 'Kopi Gajah',
            'slug' => 'kopi-gajah',
            'price' => 40,
            'description' => 'Biji Kopi pilihan',
            'status' => 2
        ]);
        About::create([
            'link' => 'https://www.youtube.com/watch?v=ARA0AxrnHdM',
            'h6' => 'Live Coffee making process.',
            'h1' => 'We Telecast our',
            'h2' => 'Coffee Making Live',
            'span' => 'We are here to listen from you deliver exellence',
            'p' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim.',
        ]);


        
    }
}
