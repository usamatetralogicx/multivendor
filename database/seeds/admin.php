<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user =new  User();
      $user->name='Admin';
      $user->email='admin@admin.com';
      $user->password=Hash::make('secret');
      $user->role_id=2;
      $user->save();
    }
}
