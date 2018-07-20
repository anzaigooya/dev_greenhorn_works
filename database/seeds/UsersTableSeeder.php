<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
  public function run()
  {
    User::truncate();
    User::create([
      'name' => 'test',
      'password' => bcrypt('1234'),
      'user_info_id' => 1
    ],[
      'name' => 'test1',
      'password' => bcrypt('2345'),
      'user_info_id' => 2
    ],[
      'name' => 'test2',
      'password' => bcrypt('3456'),
      'user_info_id' => 3
    ]);
  }
}
