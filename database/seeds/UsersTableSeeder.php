<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new User();
    	$user->name = "Admin";
    	$user->email = "admin@devtest.com";
    	$user->password = bcrypt('12345');
    	$user->is_admin = true;
    	$user->save();
    }
}
