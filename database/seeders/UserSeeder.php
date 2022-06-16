<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'Root',
            'email' => 'admin@admin.com',
            'password' => Hash::make('1234567890'),
            'roles' => User::ROLE_ROOT,
        ]);
        User::create([
            'name' => 'Operator',
            'email' => 'operator@operator.com',
            'password' => Hash::make('1234567890'),
            'roles' => User::ROLE_OPERATOR,
        ]);
    }
}
