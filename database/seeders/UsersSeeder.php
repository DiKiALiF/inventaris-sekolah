<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// membuat role admin
$adminRole = new Role;
$adminRole->name = "admin";
$adminRole->display_name = "Admin Assalaam";
$adminRole->save();

// membuat sample admin
$admin = new User;
$admin->name = "Admin Assalaam";
$admin->email = "admin@gmail.com";
$admin->password = bcrypt("rahasia");
$admin->save();
$admin->attachRole($adminRole);

// membuat role admin
$adminRole = new Role;
$adminRole->name = "admin 2";
$adminRole->display_name = "Admin Cadangan";
$adminRole->save();

// membuat sample admin
$admin = new User;
$admin->name = "Admin Cadangan";
$admin->email = "admin2@gmail.com";
$admin->password = bcrypt("12345678");
$admin->save();
$admin->attachRole($adminRole);
    }
}
