<?php

namespace Database\Seeders\IssueSystem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\IssueStatus;

class IssueStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['Opened', 'Resolved', 'Closed'];

        foreach ($statuses as $status) {
            IssueStatus::create(['name' => $status]);
        }
    }
}
