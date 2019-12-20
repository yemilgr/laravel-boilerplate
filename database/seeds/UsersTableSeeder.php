<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Yemil Godinez',
            'email' => 'yemilgr@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
