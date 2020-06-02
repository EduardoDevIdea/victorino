<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ['name' => 'Admin',
            'email' => 'admin@victoriano.com',
            'password' => Hash::make('admin'),
            'type' => 'master']);
    }
}
