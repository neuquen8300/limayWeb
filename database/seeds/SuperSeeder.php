<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'super',
            'surname' => 'super',
            'email' => 'super@super.com',
            'username' => 'super',
            'password' => bcrypt('Obispotrejo796'),
            'role' => 'admin'
        ]);
    }
}
