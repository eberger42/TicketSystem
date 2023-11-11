<?php

namespace Database\Seeders\IssueSystem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\IssuePriority;

class IssuePrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $priorities = ['Long Term', 'Low', 'Medium', 'High', 'Immediate'];

        foreach ($priorities as $priority) {
            IssuePriority::create(['name' => $priority]);
        }
    }
}
