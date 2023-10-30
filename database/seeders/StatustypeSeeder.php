<?php

namespace Database\Seeders;

use App\Models\Statustype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatustypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            [
                'name' => 'Received'
            ],
            [
                'name' => 'In progres'
            ],
            [
                'name' => 'Completed'
            ]
        ];

        foreach($status as $key => $value) {
            Statustype::create($value);
        }
    }
}
