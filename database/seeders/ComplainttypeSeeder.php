<?php

namespace Database\Seeders;

use App\Models\Complainttype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplainttypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $complainttype = [
            [
                'name' => 'Schoonmaak'
            ],
            [
                'name' => 'Onderhoud'
            ],
            [
                'name' => 'Overlast'
            ],
            [
                'name' => 'Anders'
            ]
        ];

        foreach($complainttype as $key => $value) {
            Complainttype::create($value);
        }
    }
}
