<?php

namespace Database\Seeders;

use App\Models\Parameter;
use Illuminate\Database\Seeder;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Parameter::updateOrCreate([
            'id'        => 1,
            'type_id'   => 1,
            'value'     => 36.6,
        ]);
        Parameter::updateOrCreate([
            'id'        => 2,
            'type_id'   => 1,
            'value'     => 34.44,
        ]);
        Parameter::updateOrCreate([
            'id'        => 3,
            'type_id'   => 2,
            'value'     => 122.26,
        ]);
        Parameter::updateOrCreate([
            'id'        => 4,
            'type_id'   => 2,
            'value'     => 316.13,
        ]);
        Parameter::updateOrCreate([
            'id'        => 5,
            'type_id'   => 3,
            'value'     => 3906,
        ]);
        Parameter::updateOrCreate([
            'id'        => 6,
            'type_id'   => 3,
            'value'     => 3655.3,
        ]);

    }
}
