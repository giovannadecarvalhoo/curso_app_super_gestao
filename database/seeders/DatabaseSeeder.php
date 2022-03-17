<?php

use Illuminate\Database\Seeder;
use Database\Seeders\MotivoContatoSeeder;
use FornecedorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
        $this->call(MotivoSeeder::class);
    }
}
