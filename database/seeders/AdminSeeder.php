<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'avatar' => 'https://cdn-icons-png.flaticon.com/512/666/666201.png',
            'first_name' => 'SLSU',
            'last_name' => 'Clinic',
            'display_name' => 'System Administrator'
        ]);

        User::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'user_id' => $admin->id,
            'account_type' => 1
        ]);
    }
}
