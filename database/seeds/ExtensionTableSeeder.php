<?php

use Illuminate\Database\Seeder;

class ExtensionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $extensions = ['フラットラッシュ 60本 ¥4,400 円（税込）','ボリュームラッシュ 300本 ¥7,700 円（税込）','バインドロック 120本 ¥13,200 円（税込）'];
        foreach ($extensions as $extension) {
            DB::table('extensions')->insert(['extension' => $extension]);
            
        }
    }
}
