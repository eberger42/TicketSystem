<?php

namespace Database\Seeders\TicketSystem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\TicketStatus;

class TicketStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['Opened', 'Resolved', 'Closed'];

        foreach ($statuses as $status) {
            TicketStatus::create(['name' => $status]);
        }
    }
}
