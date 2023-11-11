<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\TemplateType;

class TemplateTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templateTypes = [
            'Troubleshooting Steps',
            'Information',
        ];

        foreach ($templateTypes as $typeName) {
            TemplateType::create(['name' => $typeName]);
        }
    }
}
