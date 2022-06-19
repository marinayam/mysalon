<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('users')->truncate();
        \DB::table('users')->insert([
          [
            'kanji_name' => '山田花子',
            'hira_name' => 'やまだはなこ',
            'email' => 'aaa@bbb.com',
            'password' => Hash::make('aaa'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
          ],
          [
            'kanji_name' => '佐藤花子',
            'hira_name' => 'さとうはなこ',
            'email' => 'ccc@ddd.com',
            'password' => Hash::make('ccc'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
          ],
          [
            'kanji_name' => '田中花子',
            'hira_name' => 'たなかはなこ',
            'email' => 'eee@fff.com',
            'password' => Hash::make('eee'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
          ],
        ]);
    }
}
