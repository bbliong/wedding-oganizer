<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HomepageTableSeeder::class);

        $this->command->info('Homepage Seeder Created!');
    }
}
