<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Park Jimin',
            'email' => 'park@gmail.com',
            $user->password= Hash::make("123456")
        ]);
    }
}
