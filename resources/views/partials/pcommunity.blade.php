<section class="py-12 bg-white border-divider">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      
      @foreach($images->chunk(3) as $chunk) 
        <div class="space-y-6">
          @foreach($chunk as $image)
            <img class="w-full h-{{ $loop->index % 2 == 0 ? '48' : '64' }} object-cover rounded-lg" 
                 src="{{ asset('storage/community' . $images->image) }}" 
                 alt="Community Image">
          @endforeach
        </div>
      @endforeach

    </div>
  </div>
</section>