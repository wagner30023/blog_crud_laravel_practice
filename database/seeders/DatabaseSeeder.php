<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Db::table('produtos')->insert([
            'nome' => 'Celular',
            'valor' => 900,
            'estoque' => 15
        ]);

        Db::table('produtos')->insert([
            'nome' => 'Tablet',
            'valor' => 1500,
            'estoque' => 35
        ]);

        Db::table('produtos')->insert([
            'nome' => 'Camera Go Pro',
            'valor' => 10500,
            'estoque' => 9
        ]);

        Db::table('produtos')->insert([
            'nome' => 'Notebook',
            'valor' => 6000,
            'estoque' => 10
        ]);
    }
}
