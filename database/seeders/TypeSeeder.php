<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::updateOrCreate([
            'id' => 1,
            'name' => 'Датчик температуры',
        ]);
        Type::updateOrCreate([
            'id' => 2,
            'name' => 'Датчик давления',
        ]);
        Type::updateOrCreate([
            'id' => 3,
            'name' => 'Датчик скорости вращения',
        ]);
    }
}
