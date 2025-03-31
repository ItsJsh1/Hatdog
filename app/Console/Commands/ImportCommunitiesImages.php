<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Community;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImportCommunityImages extends Command
{
    protected $signature = 'import:community-images';
    protected $description = 'Import images from storage/app/public/community to the database';

    public function handle()
    {
        $directory = 'public/community';
        $files = Storage::files($directory);

        if (empty($files)) {
            $this->info('No images found in the community directory.');
            return;
        }

        foreach ($files as $file) {
            $filename = basename($file);

            // Check if the image already exists in the database
            if (!DB::table('communities')->where('image', $filename)->exists()) {
                DB::table('communities')->insert([
                    'image' => $filename,
                ]);

                $this->info("Imported: $filename");
            } else {
                $this->info("Skipped (already exists): $filename");
            }
        }

        $this->info('Community image import completed!');
    }
}
