<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Admin Profile',
            'no_hp' => '081234567890',
            'address' => 'Jl. Sudirman No.1',
            'user_id' => 1,
        ]);

        Profile::create([
            'name' => 'Second Profile',
            'no_hp' => '089876543210',
            'address' => 'Jl. Thamrin No.2',
            'user_id' => 2,
        ]);
    }
}
