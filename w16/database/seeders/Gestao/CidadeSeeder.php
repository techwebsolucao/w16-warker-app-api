<?php

namespace Database\Seeders\Gestao;

use App\Models\Gestao\Cidade;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Cidade::factory()->count(10)->create();
    }
}
