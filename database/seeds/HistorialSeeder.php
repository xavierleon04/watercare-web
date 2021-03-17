<?php

use Illuminate\Database\Seeder;

class HistorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historial')->insert([
            'inicio' => '15-01-20-10:00',
            'fin' => '15-01-20-10:10',
            
        ]);
    }
}
