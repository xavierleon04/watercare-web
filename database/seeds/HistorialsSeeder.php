<?php

use Illuminate\Database\Seeder;

class HistorialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('historial')->insert([
            'inicio' => '28-11-20-05:00',
            'fin' => '28-11-20-05:10' 
        ]); 
    }
}
