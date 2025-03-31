<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ImportNewsImages extends Command
{
    protected $signature = 'import:news-images';
    protected $description = 'Import images from storage/app/public/news to the database';

    public function handle()
    {
        $directory = 'public/news';
        $files = Storage::files($directory);

        if (empty($files)) {
            $this->info('No images found in the news directory.');
            return;
        }

        foreach ($files as $file) {
            $filename = basename($file);

            // Check if article already exists to avoid duplicates
            if (!Article::where('image', $filename)->exists()) {
                Article::create([
                    'title' => pathinfo($filename, PATHINFO_FILENAME),
                    'description' => 'Auto-generated description for ' . $filename,
                    'author' => 'System',
                    'image' => $filename,
                ]);

                $this->info("Imported: $filename");
            } else {
                $this->info("Skipped (already exists): $filename");
            }
        }

        $this->info('Image import completed!');
    }
}