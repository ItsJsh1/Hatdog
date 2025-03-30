<link rel="stylesheet" href="{{ asset('css/footer.css') }}">

<footer class="bg-[#101966]">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://www.facebook.com/REC.org.ph" class="flex items-center">
                    <img src="{{ asset('images/footer/Logo.png') }}" class="h-16 sm:h-24 mt-4 sm:mt-8 me-4 rounded-full border-2 border-white" alt="REC Logo" />
                    <span class="self-center text-xl sm:text-3xl font-semibold whitespace-nowrap text-white dax-regular">
                        <br>Radio Engineering<br>Circle Inc.
                    </span>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 sm:gap-x-16 sm:gap-y-6">
                <div>
                    <h2 class="mb-4 sm:mb-6 text-sm font-semibold text-white uppercase fs-elliot">Quick Links</h2>
                    <ul class="text-white font-medium">
                        <li class="mb-2 sm:mb-4 text-blue-400"><a href="{{ url('/aboutRec') }}">About REC</a></li>
                        <li class="mb-2 sm:mb-4 text-blue-400"><a href="{{ url('/aboutRec') }}">REC News</a></li>
                        <li class="mb-2 sm:mb-4 text-blue-400"><a href="{{ url('/aboutRec') }}">REC Events</a></li>
                        <li class="mb-2 sm:mb-4 text-blue-400"><a href="{{ url('/aboutRec') }}">RecApply</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-4 sm:mb-6 text-sm font-semibold text-white uppercase fs-elliot">Membership</h2>
                    <ul class="text-white font-medium">
                        <li class="mb-2 sm:mb-4 text-blue-400"><a href="{{ url('/events') }}">REC Members</a></li>
                        <li class="mb-2 sm:mb-4 text-blue-400"><a href="{{ url('/events') }}">Membership Benefits</a></li>
                        <li class="mb-2 sm:mb-4 text-blue-400"><a href="{{ url('/events') }}">Membership Requirements</a></li>
                        <li class="mb-2 sm:mb-4 text-blue-400"><a href="{{ url('/events') }}">REC Community</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-4 sm:mb-6 text-sm font-semibold text-white uppercase fs-elliot">Contacts</h2>
                    <ul class="text-white font-medium">
                        <li class="mb-2 sm:mb-4">Phone:<a href="{{ url('/contactUs') }}" class="text-blue-400"> +63 0917 541 8836</a></li>
                        <li class="mb-2 sm:mb-4">Social:<a href="https://www.facebook.com/REC.org.ph" class="text-blue-400"> Facebook</a></li>
                        <li class="mb-2 sm:mb-4">Email:<a href="{{ url('/contactUs') }}" class="text-blue-400"> radio@rec.org.ph</a></li>
        
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-4 sm:my-6 border-white sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-white sm:text-center">© 2025 RECInc.™. All Rights Reserved.</span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-blue-400 hover:underline ms-5">Terms and Conditions</a>
                <a href="#" class="text-blue-400 hover:underline ms-5">Privacy and Policy</a>
            </div>
        </div>
    </div>
</footer>