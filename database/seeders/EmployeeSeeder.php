<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(20),
            'position' =>  Str::random(25),
            'phone' =>  strval(rand(100,999))."-".strval(rand(100,999))."-".strval(rand(100,999)),
            'is_hired'=> (bool)rand(0,1),
        ]);

    }
}
