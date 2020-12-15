<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create ([
      'name' => 'Gabriel Alves da Silva',
      'email' => 'gabi.alves1999g@gmail.com',
      'password' => bcrypt('gabriel0903991'),
    ]);
  }
}