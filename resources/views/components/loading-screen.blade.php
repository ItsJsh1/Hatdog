<div x-data="loadingScreen()"
     x-show="isLoading"
     class="fixed inset-0 z-[9999] flex items-center justify-center bg-white dark:bg-gray-900 transition-opacity duration-300"
     x-transition:enter="ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0">
     
    <div class="text-center">
        <!-- Your loading animation (example with Tailwind) -->
        <div class="w-16 h-16 border-4 border-[#5E6FFB] border-t-transparent rounded-full animate-spin mx-auto"></div>
        <p class="mt-4 text-lg font-medium text-gray-700 dark:text-gray-300">Loading...</p>
    </div>
</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('loadingScreen', () => ({
        isLoading: true,
        
        init() {
            // Hide loader when page is fully loaded
            window.addEventListener('load', () => {
                this.isLoading = false;
            });
            
            // Also hide loader if Alpine is initialized but page is already loaded
            if (document.readyState === 'complete') {
                this.isLoading = false;
            }
        }
    }));
});
</script>