<?php

use Illuminate\Database\Seeder;

class lenguajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languajes')->insert(
            [
                'languajes'=>'espaniol'
            ]
        );
        DB::table('languajes')->insert(
            [
                'languajes'=>'ingles'
            ]
        );
        DB::table('languajes')->insert(
            [
                'languajes'=>'portugues'
            ]
        );
    }
}
