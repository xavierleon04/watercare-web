<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        self::seedUser();
        $this->command->info("Tabla ha iniciado");
    }

    public function seedUser()
    {
        DB::table('users')->delete();
        $user = new User;
        $user->name="admin";
        $user->email="admin@leon.com";
        $user->password= Hash::make("1234");
        $user->save();

    }
}
