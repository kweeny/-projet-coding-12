<?php

use Illuminate\Database\Seeder;
use App\Work;
class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Work::class,)->create();
    }
}
