<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Role::truncate;

        Role::create([
            'role' => 'adminsh'
        ]);

        Role::create([
            'role' => 'editorsh'
        ]);

        Role::create([
            'role' => 'usersh'
        ]);
    }
}
