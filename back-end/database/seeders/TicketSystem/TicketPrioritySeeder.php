<?php

namespace Database\Seeders\TicketSystem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\TicketPriority;

class TicketPrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $priorities = ['Long Term', 'Low', 'Medium', 'High', 'Immediate'];

        foreach ($priorities as $priority) {
            TicketPriority::create(['name' => $priority]);
        }
    }
}
