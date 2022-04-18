<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            'name' => 'marina',
            'email' => 'aaa@bbb.com',
            'password' => Hash::make('aaa'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
          ]);
    }
    
}
