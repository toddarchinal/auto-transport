<?php

use Illuminate\Database\Seeder;
use App\Dealer;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dealer::insert([
            'name' => 'Honda'
        ]);
        Dealer::insert([
            'name' => 'Ford'
        ]);
        Dealer::insert([
            'name' => 'Mitsubishi'
        ]);
    }
}
