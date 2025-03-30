@vite(['resources/css/header.css'])

<header class="bg-[#101966] text-white header-custom relative z-40">
    <div class="container mx-auto flex items-center justify-between p-4">
        <img src="{{ asset('images/navbar/Logo.png') }}" alt="Logo" class="h-16 md:h-24 transition-transform duration-300 hover:scale-110"> 
        <div class="text-center">
            <div class="md:hidden flex items-center justify-center space-x-4">
                <h1 class="text-2xl font-bold dax-regular">REC Inc.</h1>
                <p class="text-lg dax-regular">DZ1REC</p>
            </div>
            <div class="hidden md:block">
                <h1 class="text-5xl font-bold italic dax-regular">Radio Engineering Circle Incorporation</h1>
                <p class="text-3xl mt-4 dax-regular">DZ1REC</p>
            </div>
        </div>
        <div class="w-24 h-12 flex items-center justify-center"></div>
    </div>
</header>