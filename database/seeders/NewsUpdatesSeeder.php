<?php

namespace Database\Seeders;

use App\Models\NewsUpdate;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class NewsUpdatesSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();
        
        $newsUpdates = [
            [
                'user_id' => $user->id,
                'featured_image' => 'https://source.unsplash.com/random/800x600/?news',
                'caption' => 'Exciting Updates in Our Community',
                'created_at' => Carbon::now()->subDays(2),
            ],
            [
                'user_id' => $user->id,
                'featured_image' => 'https://source.unsplash.com/random/800x600/?event',
                'caption' => 'Event Highlights of the Week',
                'created_at' => Carbon::now()->subDays(3),
            ],
            [
                'user_id' => $user->id,
                'featured_image' => 'https://source.unsplash.com/random/800x600/?community',
                'caption' => 'New Community Initiatives',
                'created_at' => Carbon::now()->subDays(4),
            ],
        ];

        foreach ($newsUpdates as $news) {
            NewsUpdate::create($news);
        }
    }
}