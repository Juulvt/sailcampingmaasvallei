<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('roles')->truncate();
        DB::table('users')->truncate();
        DB::table('complainttypes')->truncate();
        DB::table('prioritytypes')->truncate();
        DB::table('statustypes')->truncate();
        DB::table('complaints')->truncate();

        $this->call(ComplainttypeSeeder::class);
        $this->call(StatustypeSeeder::class);
        $this->call(RoleSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
