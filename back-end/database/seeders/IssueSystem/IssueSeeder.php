<?php

namespace Database\Seeders\IssueSystem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\Issue;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Issue::factory()->count(10)->create();
    }
}
