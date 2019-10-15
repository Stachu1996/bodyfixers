<?php

use Illuminate\Database\Seeder;

class PacketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Packet', 5)->create();
    }
}
