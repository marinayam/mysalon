<?php

use Illuminate\Database\Seeder;

class TriggerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $triggers = ['ホームページ','ホットペッパービューティー','Instagram','ブログ','ご友人からのご紹介','その他'];
        foreach ($triggers as $trigger) {
            DB::table('triggers')->insert(['trigger' => $trigger]);
            
        }
    }
}
