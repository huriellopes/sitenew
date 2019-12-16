<?php

use Illuminate\Database\Seeder;

class NivelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nivels')->insert([
            [
                'nivel' => 'A',
                'descricao' => 'Administrador'
            ],
            [
                'nivel' => 'M',
                'descricao' => 'Moderador'
            ]
        ]);
    }
}
