<?php

use Illuminate\Database\Seeder;

class EyebrowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eyebrows = ['眉毛ブロウWax (1回) ¥5,500 円（税込）','眉毛ブロウWax ※デザインなし (1回) ¥4,400 円（税込）','ブロウラミネーション（眉毛パーマ) ¥7,700 円（税込）' ];
        foreach ($eyebrows as $eyebrow) {
            DB::table('eyebrows')->insert(['eyebrow' => $eyebrow]);
            
        }
    }
}
