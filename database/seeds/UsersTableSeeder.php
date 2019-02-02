<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'Francisco Rodriguez',
          'email' => 'francisco.develop@icloud.com',
          'password' => bcrypt('Brain123!!!')
        ]);

        User::create([
          'name' => 'kain',
          'email' => 'kain@email.com',
          'password' => bcrypt('123456')
        ]);
    }
}
