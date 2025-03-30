@vite(['resources/css/scrolls.css'])
@vite(['resources/js/scrolls.js'])

<button
  id="scrollButton"
  class="fixed bottom-6 left-6 bg-[#3F53E8] text-white p-4 border border-[#3F53E8]
  shadow hover:bg-white hover:text-[#3F53E8] hover:border-[#3F53E8] transition-colors duration-300 ease-in-out z-[9999]"
  aria-label="Scroll"
>
  <span id="arrowIcon" class="arrow-icon">↓</span>
</button>

<script src="{{ asset('js/scrolls.js') }}"></script>