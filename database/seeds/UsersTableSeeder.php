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
            'name' => 'korisnik',
            'email' => str_random(10).'@test.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
