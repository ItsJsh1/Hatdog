<section class="py-12 bg-white border-divider">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      @php
        $columns = [[], [], [], []]; // Initialize 4 empty arrays for columns
        foreach ($images as $index => $image) {
            $columns[$index % 4][] = $image; // Distribute images into 4 columns
        }

        // Define height patterns per column
        $heightPatterns = [
            [48, 64, 48], // Column 1
            [64, 48, 64], // Column 2
            [48, 64, 48], // Column 3
            [64, 48, 64]  // Column 4
        ];
      @endphp

      @foreach($columns as $colIndex => $column)
        <div class="space-y-6">
          @foreach($column as $imgIndex => $image)
            @php
              $height = $heightPatterns[$colIndex][$imgIndex % 3]; // Ensure correct height cycling
            @endphp
            <img class="w-full h-{{ $height }} object-cover rounded-lg"
                 src="{{ asset('storage/community/' . $image->image) }}"
                 alt="Community Image">
          @endforeach
        </div>
      @endforeach

    </div>
  </div>
</section>
