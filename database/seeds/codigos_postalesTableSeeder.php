<?php

use Illuminate\Database\Seeder;
use App\CodigosPostales;

class codigos_postalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CodigosPostales::class,35)->create();
    }
}
