<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Ticket System
use \Database\Seeders\TicketSystem\TicketSeeder;
use \Database\Seeders\TicketSystem\TicketPrioritySeeder;
use \Database\Seeders\TicketSystem\TicketStatusSeeder;

//Product System
use \Database\Seeders\ProductSystem\ProductSeeder;

//Client System
use \Database\Seeders\ClientSystem\ClientSeeder;

//Issue System
use \Database\Seeders\IssueSystem\IssueTypeSeeder;
use \Database\Seeders\IssueSystem\IssueStatusSeeder;
use \Database\Seeders\IssueSystem\IssuePrioritySeeder;
use \Database\Seeders\IssueSystem\IssueSeeder;

//General
use \Database\Seeders\General\CommentSeeder;
use \Database\Seeders\General\FileSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            TicketPrioritySeeder::class,
            TicketStatusSeeder::class,
            ProductSeeder::class,
            ClientSeeder::class,
            TicketSeeder::class,
            IssueTypeSeeder::class,
            CommentSeeder::class,
            IssueStatusSeeder::class,
            IssuePrioritySeeder::class,
            IssueSeeder::class,
            FileSeeder::class,
        ]);
    }
}
