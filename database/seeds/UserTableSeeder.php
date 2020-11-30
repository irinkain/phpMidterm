<?php

use App\Models\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = new User();
        $user->name = 'student';
        $user->email = 'student@student.com';
        $user->password = Hash::make('password');
        $user->role = 'user';
        $user->save();

        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->password = Hash::make('password');
        $admin->role = 'admin';
        $admin->save();
    }
}
