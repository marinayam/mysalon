<?php

use Illuminate\Database\Seeder;

class PermTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('perms')->truncate();
        $perms = ['ラッシュリフト 上まつげのみ ¥6,600 円（税込）','ラッシュリフト 上下（リピートのお客様）¥9,900 円（税込）'];
        foreach ($perms as $perm) {
            DB::table('perms')->insert(['perm' => $perm]);
            
        }
    }
}
