<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      /*
      $this->call(TriggerTableSeeder::class);
      $this->call(PermTableSeeder::class);
      $this->call(ExtensionTableSeeder::class);
      $this->call(EyebrowTableSeeder::class);
      $this->call(OptionTableSeeder::class);
      // $this->call(UserTableSeeder::class);
      // $this->call(ChartTableSeeder::class);
      // $this->call(AppointmentTableSeeder::class);
      $this->call(AdminTableSeeder::class);
      */
      /*
      \DB::table('users')->insert([
        [
          'kanji_name' => '山田花子',
          'hira_name' => 'やまだはなこ',
          'email' => 'aaa@bbb.com',
          'tel' => '090-0000-0000',
          'password' => Hash::make('aaa'),
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ],
        [
          'kanji_name' => '佐藤花子',
          'hira_name' => 'さとうはなこ',
          'email' => 'ccc@ddd.com',
          'tel' => '090-0001-0001',
          'password' => Hash::make('ccc'),
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ],
        [
          'kanji_name' => '田中花子',
          'hira_name' => 'たなかはなこ',
          'email' => 'eee@fff.com',
          'tel' => '090-0002-0002',
          'password' => Hash::make('eee'),
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ],
      ]);
      */
      /*
      // 予約データ
      $user_ids = ['1','2','3','1'];
      $dates = ['2022-02-01','2022-02-02','2022-02-03','2022-02-04'];
      $times = ['09:00','10:00','11:00','12:00'];
      $comments = ['おはよう','こんにちは','こんばんは','2回目'];
      for ($i = 0; $i < count($user_ids); $i++) {
        \DB::table('appointments')->insert([
          'user_id' => $user_ids[$i],
          'date' => $dates[$i],
          'time' => $times[$i],
          'comment' => $comments[$i],
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
          ]);
      } 
      */
      /*
      //まつ毛パーマ予約
      \DB::table('appointment_perm')->insert([
        [
          'appointment_id' => '1',
          'perm_id' => '2',
        ],
      ]);
      */
      /*
      // マツエク予約
      \DB::table('appointment_extension')->insert([
        [
          'appointment_id' => '2',
          'extension_id' => '3',
        ],
      ]);
      */
       /*
      // 眉予約
      \DB::table('appointment_eyebrow')->insert([
        [
          'appointment_id' => '3',
          'eyebrow_id' => '3',
        ],
      ]);
      */
      /*
      // オプション予約
      \DB::table('appointment_option')->insert([
        [
          'appointment_id' => '4',
          'option_id' => '1',
        ],
      ]);
      */
      // 来店きっかけ
      \DB::table('chart_trigger')->insert([
        [
          'chart_id' => '3',
          'trigger_id' => '3',
        ],
      ]);
      /*
      $user_ids = ['1','2','3'];
      $birthdays = ['1996-01-01','1996-02-02','1996-03-03'];
      $zips = ['180-0001','180-0002','180-0003'];
      $prefs = ['東京都','東京都','東京都'];
      $addr01s = ['武蔵野市吉祥寺北町','武蔵野市吉祥寺東町','武蔵野市吉祥寺南町'];
      $addr02s = ['1','2','3'];
      $troubles = ['肌荒れ','赤み','なし'];
      $concerns = ['まつげの量','眉毛の形','まつげの長さ'];
      $allergys = ['花粉','りんご','アーモンド'];
      $records = ['マツエク','パーマ','ヒアルロン酸'];
      $body_concerns = ['肩こり','目の疲れ','冷え'];
      $comments = ['おはよう','こんにちは','こんばんは'];
      for ($i = 0; $i < count($user_ids); $i++) {
        \DB::table('charts')->insert([
          'user_id' => $user_ids[$i],
          'birthday' => $birthdays[$i],
          'zip' => $zips[$i],
          'pref' => $prefs[$i],
          'addr01' => $addr01s[$i],
          'addr02' => $addr02s[$i],
          'trouble' => $troubles[$i],
          'concern' => $concerns[$i],
          'allergy' => $allergys[$i],
          'record' => $records[$i],
          'body_concern' => $body_concerns[$i],
          'comment' => $comments[$i],
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
          ]);
      } 
      */

    }
    
}
