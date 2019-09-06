<?php

use Illuminate\Database\Seeder;
use Otecnya\Role;
use Otecnya\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $_role_user = Role::where('name', 'user')->first();
        $_role_admin = Role::where('name', 'admin')->first();
        
       $user = new user();
       $user->name = "user";
       $user->email = "user@gmail.com";
       $user->password = bcrypt('query');
       $user->save();
       
       $user->roles()->attach($_role_user);

       $user = new user();
       $user->name = "Admin";
       $user->email = "admin@gmail.com";
       $user->password = bcrypt('query');
       $user->save();
       $user->roles()->attach($_role_admin);
    }
}
