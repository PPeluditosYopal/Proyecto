<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EspeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Especies::create(['id' => 1, 'especies' => 'Canino']);
        Especies::create(['id' => 2, 'especies' => 'Felino']);
    }
}
