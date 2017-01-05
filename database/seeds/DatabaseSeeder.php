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

        // $this->call(UsersTableSeeder::class);
        DB::table('contents')->truncate();

        DB::table('contents')->insert([
            [
                'meta_key' => 'title',
                'meta_value' => 'chop chop law',
            ],
            [
                'meta_key' => 'twitter',
                'meta_value' => 'default',
            ],
            [
                'meta_key' => 'github',
                'meta_value' => 'default',
            ],
            [
                'meta_key' => 'linkedin',
                'meta_value' => 'default',
            ]
        ]);
    }
}
