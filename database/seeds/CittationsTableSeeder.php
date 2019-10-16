<?php

use Illuminate\Database\Seeder;

class CittationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cittations')->insert([
            
            ['cittation'=> 'La nature fait bien les choses'],

            ['cittation'=> 'La nature à ce pouvoir unique de nous apaiser'],

            ['cittation'=> 'La raison nous trompe plus souvent que la nature'],

            ['cittation'=> 'La nature ne fait rien en vain']
        ]);
    }
}
