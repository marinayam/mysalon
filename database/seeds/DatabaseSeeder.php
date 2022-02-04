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
        $this->call(TriggerTableSeeder::class);
        $this->call(PermTableSeeder::class);
        $this->call(ExtensionTableSeeder::class);
        $this->call(EyebrowTableSeeder::class);
        $this->call(OptionTableSeeder::class);
    }
}
