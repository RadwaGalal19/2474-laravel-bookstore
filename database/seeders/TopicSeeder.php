<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [
            'adventure fiction',
            'fantasy',
            'historical fiction',
            'horror',
            'magical realism',
            'science fiction'
        ];

        foreach ($topics as $topic) {
            Topic::factory()->create([
                'topic' => $topic
            ]);
        }
    }
}
