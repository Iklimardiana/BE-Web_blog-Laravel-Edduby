<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_tag')->insert([
            [
                'post_id' => 1,
                'tag_id' => 1, // Laravel
            ],
            [
                'post_id' => 1,
                'tag_id' => 3, // Web Development
            ],
            [
                'post_id' => 2,
                'tag_id' => 2, // PHP
            ],
        ]);
    }
}
