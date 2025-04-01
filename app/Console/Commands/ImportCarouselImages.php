<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImportCarouselImages extends Command
{
    protected $signature = 'import:carousel-images';
    protected $description = 'Import images from storage/app/public/carousel to the main_carousel table in the database';

    public function handle()
    {
        $directory = 'public/carousel';
        $files = Storage::files($directory);

        if (empty($files)) {
            $this->info('No images found in the carousel directory.');
            return;
        }

        foreach ($files as $file) {
            $filename = basename($file);

            // Check if image already exists to avoid duplicates
            $existingImage = DB::table('main_carousels')->where('image', $filename)->exists();

            if (!$existingImage) {
                DB::table('main_carousels')->insert([
                    'image' => $filename,
                    'title' => $filename,
                    'content' => $filename,
                    'user_id' => 1,
                    'status' => 1, // Assuming active by default
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                $this->info("Imported: $filename");
            } else {
                $this->info("Skipped (already exists): $filename");
            }
        }

        $this->info('Carousel image import completed!');
    }
}
