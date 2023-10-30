<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            [
                'name' => 'Kampeerder'
            ],
            [
                'name' => 'Schoonmaker'
            ],
            [
                'name' => 'Onderhoudsmedewerker'
            ],
            [
                'name' => 'Beheerder'
            ],
        ];

        foreach($role as $key => $value) {
            Role::create($value);
        }
    }
}
