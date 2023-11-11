<?php

namespace Database\Seeders\IssueSystem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use \App\Models\IssueType;

class IssueTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  
        $issueTypes = [
            'Communication Error',
            'Wrong Response',
            'Missing Functionality',
            'Other',
        ];

        foreach ($issueTypes as $issueType) {
            IssueType::create(['name' => $issueType]);
        }
    }
}
