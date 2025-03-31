<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Illuminate\Support\Facades\File;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $imageFiles = File::files(storage_path('app/public/news'));

        if (empty($imageFiles)) {
            $this->command->info('No images found in storage/app/public/news.');
            return;
        }

        foreach ($imageFiles as $file) {
            Article::create([
                'title' => fake()->title(),
                'image' => 'news/' . 'sample1.png', // Store relative path
                'description' => 'Description for ' . pathinfo($file->getFilename(), PATHINFO_FILENAME),
                'author' => 'Admin'
            ]);
        }

        $this->command->info('Articles seeded successfully!');
    }
}
