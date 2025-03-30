@vite(['resources/css/navbar.css'])
@vite(['resources/js/navbar.js'])

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">


<script src="https://cdn.tailwindcss.com"></script>

<nav class="bg-[#5E6FFB] text-white navbar-custom sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto flex justify-center items-center p-2 md:py-2">
        <button id="menu-toggle" class="md:hidden p-2 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <div id="nav-links" class="hidden md:flex space-x-6 font-semibold justify-center items-center">
            <a href="http://127.0.0.1:8000/Rec-Home" class="relative text-lg px-3 py-2 tracking-wide transition duration-300 hover:text-[#101966] hover:scale-110
                after:block after:h-[3px] after:bg-white after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full shrikhand-regular">
                HOME
            </a>
            <span class="border-l border-white h-5"></span>

            <div class="relative group">
                <button class="relative text-lg flex items-center gap-1 px-3 py-2 tracking-wide transition duration-300 hover:text-[#101966] hover:scale-110
                    after:block after:h-[3px] after:bg-white after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full shrikhand-regular">
                    MEMBERSHIP
                </button>
                <div class="absolute left-[-8%] mt-2 w-48 bg-[#5E6FFB] text-lg text-white opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-300 shadow-lg rounded-lg z-50">
                    <div class="relative group/nested">
                        <a href="#" class="relative flex items-center justify-center gap-0 w-full px-4 py-2 tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular
                            after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                            Ka-Circles
                            <svg class="w-4 h-4 transition-transform duration-300 transform group-hover/nested:rotate-90" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414L12.707 10l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                        <div class="absolute left-full top-0 ml-2 w-52 bg-[#5E6FFB] text-white opacity-0 invisible group-hover/nested:visible group-hover/nested:opacity-100 transition-all duration-300 shadow-lg rounded-lg z-50">
                            <a href="http://127.0.0.1:8000/RegularMembers" class="relative block px-4 py-2 text-center tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular
                                after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                                Regular
                            </a>
                            <a href="http://127.0.0.1:8000/AssociateMembers" class="relative block px-4 py-2 text-center tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular
                                after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                                Associate
                            </a>
                            <a href="http://127.0.0.1:8000/StudentMembers" class="relative block px-4 py-2 text-center tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular rounded-b-lg
                                after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                                Student
                            </a>
                        </div>
                    </div>

                    <a href="http://127.0.0.1:8000/MembershipInfo" class="relative block px-4 py-2 text-center tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular
                        after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                        Membership Information
                    </a>
                </div>
            </div>

            <span class="border-l border-white h-5"></span>

            <div class="relative group">
                <button class="relative text-lg flex items-center gap-1 px-3 py-2 tracking-wide transition duration-300 hover:text-[#101966] hover:scale-110
                    after:block after:h-[3px] after:bg-white after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full shrikhand-regular">
                    APPLICATION
                </button>
                <div class="absolute left-[-8%] mt-2 w-48 bg-[#5E6FFB] text-lg text-white opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-300 shadow-lg rounded-lg z-50">
                    <div class="relative group/nested">
                        <button class="relative flex items-center justify-center gap-0 w-full px-4 py-2 tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular
                            after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                            REC Apply
                            <svg class="w-4 h-4 transition-transform duration-300 transform group-hover/nested:rotate-90" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414L12.707 10l-4 4a 1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <div class="absolute left-full top-0 ml-2 w-52 bg-[#5E6FFB] text-white opacity-0 invisible group-hover/nested:visible group-hover/nested:opacity-100 transition-all duration-300 shadow-lg rounded-lg z-50">
                            <a href="http://127.0.0.1:8000/StudentApplicationForm" class="relative block px-4 py-2 text-center tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular
                                after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                                Student
                            </a>
                            <a href="http://127.0.0.1:8000/RegularApplicationForm" class="relative block px-4 py-2 text-center tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular
                                after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                                Regular
                            </a>
                            <a href="http://127.0.0.1:8000/AssociateApplicationForm" class="relative block px-4 py-2 text-center tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular rounded-b-lg
                                after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                                Associate
                            </a>
                        </div>
                    </div>

                    <a href="http://127.0.0.1:8000/Guide" class="relative block px-4 py-2 text-center tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular
                        after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                        REC iApply
                    </a>
                </div>
            </div>


            <span class="border-l border-white h-5"></span>

            <div class="relative group">
                <button class="relative text-lg flex items-center gap-1 px-3 py-2 tracking-wide transition duration-300 hover:text-[#101966] hover:scale-110 
                    after:block after:h-[3px] after:bg-white after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full shrikhand-regular">
                    EVENTS . NEWS
                </button>
                <div class="absolute left-[-3%] mt-2 w-48 bg-[#5E6FFB] text-lg text-white opacity-0 invisible group-hover:visible group-hover:opacity-100 transition-all duration-300 shadow-lg rounded-b-lg z-50">
                    <a href="http://127.0.0.1:8000/News" class="relative block px-4 py-2 text-center tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular
                        after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                        On the Air
                    </a>
                    <a href="http://127.0.0.1:8000/Events" class="relative block px-4 py-2 text-center tracking-wider font-bold transition-all duration-300 hover:text-[#101966] hover:bg-white shrikhand-regular
                        after:block after:h-[3px] after:bg-[#101966] after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full">
                        Top Stories
                    </a>
                </div>
            </div>

            <span class="border-l border-white h-5"></span>

            <div class="relative group">
                <a href="http://127.0.0.1:8000/AboutUs" 
                class="relative text-lg flex items-center gap-1 px-3 py-2 tracking-wide transition duration-300 hover:text-[#101966] hover:scale-110
                        after:block after:h-[3px] after:bg-white after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full shrikhand-regular">
                    THE ORG
                </a>
            </div>


            <span class="border-l border-white h-5"></span>

            <div class="relative group">
                <a href="http://127.0.0.1:8000/ContactUs"  class="relative text-lg flex items-center gap-1 px-3 py-2 tracking-wide transition duration-300 hover:text-[#101966] hover:scale-110
                    after:block after:h-[3px] after:bg-white after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full shrikhand-regular">
                    CONTACT US
                </a>
            </div>

            <span class="border-l border-white h-5"></span>

            <div class="relative group">
                <a href="http://127.0.0.1:8000/Community" class="relative text-lg flex items-center gap-1 px-3 py-2 tracking-wide transition duration-300 hover:text-[#101966] hover:scale-110
                    after:block after:h-[3px] after:bg-white after:w-0 after:transition-all after:duration-300 after:absolute after:bottom-0 after:left-0 hover:after:w-full shrikhand-regular">
                    THE COMMUNITY
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="sticky top-[length_of_navbar] z-40 w-full h-[6px] bg-whit">
    <div id="progress-bar" class="h-full bg-[#101966] transition-all duration-150 ease-out" style="width: 0%"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Calculate navbar height dynamically
    const navbar = document.querySelector('nav');
    const navbarHeight = navbar.offsetHeight;
    const progressContainer = document.querySelector('.sticky.top-\\[length_of_navbar\\]');
    
    // Set progress container top position to match navbar height
    progressContainer.style.top = `${navbarHeight}px`;
    
    const progressBar = document.getElementById('progress-bar');
    
    window.addEventListener('scroll', function() {
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight;
        const scrollPosition = window.scrollY || window.pageYOffset || document.body.scrollTop + (document.documentElement && document.documentElement.scrollTop || 0);
        
        const scrollPercentage = (scrollPosition / (documentHeight - windowHeight)) * 100;
        progressBar.style.width = scrollPercentage + '%';
    });
});
</script>

