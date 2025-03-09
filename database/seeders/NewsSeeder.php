<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'Cheers to 8 Years with REC!',
                'content' => 'For eight incredible years, we have been riding waves and standing strong...',
                'image' => 'images/home/newsSection/Featured1.jpg',
                'category' => 'Featured',
                'created_at' => now(),
            ],
            [
                'title' => 'DZ1REC Amateur Channels Now on Zello!',
                'content' => 'We are excited to announce that DZ1REC is now connected to Zello...',
                'image' => 'images/home/newsSection/News1.jpg',
                'category' => 'Top Story',
                'created_at' => now(),
            ],
        ]);
    }
}
