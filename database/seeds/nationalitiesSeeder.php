<?php

use Illuminate\Database\Seeder;

class nationalitiesSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('nationalities')->insert(
            [
                'country'=>'argentina'
            ]
        );
        DB::table('nationalities')->insert(
            [
                'country'=>'brasil'
            ]
        );
        DB::table('nationalities')->insert(
            [
                'country'=>'uruguay'
            ]
        );
    }
}
