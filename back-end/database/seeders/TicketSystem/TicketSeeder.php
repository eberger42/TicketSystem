<?php

namespace Database\Seeders\TicketSystem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use \App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Use the Ticket factory to create 10 ticket entries
        Ticket::factory()->count(10)->create();
    }
}
