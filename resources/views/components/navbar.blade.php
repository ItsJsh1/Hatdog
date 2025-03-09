<!-- JS FOR THE TAILWIND -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- CSS FOR THE NAVBAR.BLADE.PHP -->
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<!-- JAVASCRIPT FOR THE HOME.BLADE.PHP -->
<script src="{{ asset('js/navbar.js') }}"></script>

<nav class="bg-[#101966] text-white p-4 absolute top-0 left-0 w-full z-50">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo and Brand Name -->
        <div class="logo-container">
            <img src="{{ asset('images/navbar/Logo.png') }}" alt="Logo" class="w-14 h-14 rounded-full">
            <span class="text-3xl font-bold logo-text">Radio Engineering Circle Inc.</span>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-4">
            <a href="#" class="nav-link md:hover:text-[#536FFB]">Home</a>
            <span class="nav-divider">|</span>

            <!-- Membership Dropdown -->
            <div class="relative group">
                <button class="nav-link md:hover:text-[#536FFB] flex items-center">Membership ▾</button>
                <div class="absolute left-0 bg-[#101966] text-white shadow-lg mt-4 py-2 w-48 dropdown-menu rounded-b-lg">
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Ka-Circles</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Membership Benefits</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Membership Fees</a>
                </div>
            </div>

            <span class="nav-divider">|</span>

            <!-- RecApply Dropdown -->
            <div class="relative group">
                <button class="nav-link md:hover:text-[#536FFB] flex items-center">RecApply ▾</button>
                <div class="absolute left-0 bg-[#101966] text-white shadow-lg mt-4 py-2 w-48 dropdown-menu rounded-b-lg">
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">How to Join?</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">RECquirements</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Apply Now!</a>
                </div>
            </div>
            <span class="nav-divider">|</span>

            <!-- News & Events Dropdown -->
            <div class="relative group">
                <button class="nav-link md:hover:text-[#536FFB] flex items-center">News & Events ▾</button>
                <div class="absolute left-0 bg-[#101966] text-white shadow-lg mt-4 py-2 w-48 dropdown-menu rounded-b-lg">
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">On the Air</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Top Events</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Upcoming Events</a>
                </div>
            </div>
            <span class="nav-divider">|</span>

            <!-- About REC Dropdown -->
            <div class="relative group">
                <button class="nav-link md:hover:text-[#536FFB] flex items-center">About REC ▾</button>
                <div class="absolute left-0 bg-[#101966] text-white shadow-lg mt-4 py-2 w-48 dropdown-menu rounded-b-lg">
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Preamble</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Vision & Mission</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Goals & Objectives</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Rules & Policies</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Our Supporters</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">The Community</a>
                </div>
            </div>
            <span class="nav-divider">|</span>

            <!-- Contact Us Dropdown -->
            <div class="relative group">
                <button class="nav-link md:hover:text-[#536FFB] flex items-center">Contact Us ▾</button>
                <div class="absolute left-0 bg-[#101966] text-white shadow-lg mt-4 py-2 w-48 dropdown-menu rounded-b-lg">
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Its Socials</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Feedbacks</a>
                    <a href="#" class="block px-4 py-2 hover:text-[#5E6FFB]">Questions?</a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Button -->
        <button class="md:hidden focus:outline-none" id="menu-toggle">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden hidden" id="mobile-menu">
        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-800">Home</a>
        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-800">Membership</a>
        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-800">RecApply</a>
        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-800">News & Events</a>
        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-800">About REC</a>
        <a href="#" class="block px-4 py-2 text-white hover:bg-gray-800">Contact</a>
    </div>
</nav>
