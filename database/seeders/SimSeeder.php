<?php

namespace Database\Seeders;

use App\Models\Sim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Sim::create([

            'serial_number'=>'#78745',
            'company'=>'Movistar',
            'phone_id'=>1,

        ]);
        Sim::create([

            'serial_number'=>'#78745',
            'company'=>'Claro',
            'phone_id'=>2,

        ]);
        Sim::create([

            'serial_number'=>'#78745',
            'company'=>'Personal',
            'phone_id'=>3,

        ]);


    }
}
