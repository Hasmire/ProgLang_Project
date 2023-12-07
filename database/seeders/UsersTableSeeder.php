<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $userData = [
      [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'password' => bcrypt('password123'),
      ],
      [
        'name' => 'Gregg Lagman',
        'email' => 'gregg@example.com',
        'password' => bcrypt('password123'),
      ],
      [
        'name' => 'Jay Ambal',
        'email' => 'jay@example.com',
        'password' => bcrypt('password123'),
      ],
      [
        'name' => 'Lancelot Bulan',
        'email' => 'lancelot@example.com',
        'password' => bcrypt('password123'),
      ],
    ];

    foreach ($userData as $user) {
      User::create($user);
    }
  }
}
