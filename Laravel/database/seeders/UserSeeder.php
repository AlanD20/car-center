<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => config('info.admin_name'),
            'username' => config('info.admin_username'),
            'password' => Hash::make(config('info.admin_password')),
        ];
        $default = [
            'name' => config('info.default_name'),
            'username' => config('info.default_username'),
            'password' => Hash::make(config('info.default_password')),
        ];
        $adminUser = \App\Models\User::firstOrCreate(['username' => $admin['username']], $admin);
        $defaultUser = \App\Models\User::firstOrCreate(['username' => $default['username']], $default);

        $adminUser->update($admin);
        $defaultUser->update($default);
    }
}
