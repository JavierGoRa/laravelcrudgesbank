<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = "Pedro User";
        $user->email = "pedro@gmail.com";
        $user->password = bcrypt("123456");
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = "Juan User";
        $user->email = "juan@gmail.com";
        $user->password = bcrypt("123456");
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
