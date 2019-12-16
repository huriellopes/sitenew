<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'Huriel Lopes',
            'email' => 'huriellopes1996@gmail.com',
            'password' => bcrypt('huriel1996'),
            'ativo' => 1,
            'idnivel' => 1
        ]);
    }
}
