<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
use App\Models\User;
use App\Models\Role;

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
        //User::truncate();
        //DB::table('role_user')->truncate();

        $adminRole      = Role::where('role','admin')->first();
        $editorRole     = Role::where('role','editor')->first();
        $guestRole      = Role::where('role','guest')->first();
    


    $admin = User::create([
        'name'      => "Site Admin",
        'email'     => "admin@denionn.admin.denionn",
        'password'  => Hash::make('#admin@denionn@experts##@admin.denionn')
    ]);
    $editor = User::create([
        'name'      => "Site Editor",
        'email'     => "edit@denionn.edit.denionn",
        'password'  => Hash::make('#edit@denionn@experts##@edit.denionn')
    ]);
    $guest = User::create([
        'name'      => "Site Guest",
        'email'     => "guest@denionn.guest.denionn",
        'password'  => Hash::make('#admin@denionn@experts##.denionn')
    ]);

    $admin->roles()->attach($adminRole);
    $editor->roles()->attach($editorRole);
    $guest->roles()->attach($guestRole);

    }
}
