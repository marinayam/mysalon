<?php

use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = ['シャンプー＆トリートメントケア ¥1,100（税込）'];
        foreach ($options as $option) {
            DB::table('options')->insert(['option' => $option]);
            
        }
    }
}
