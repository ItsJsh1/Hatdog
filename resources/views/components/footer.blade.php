<footer class="bg-[#0A0046]">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://www.facebook.com/REC.org.ph" class="flex items-center">
                    <img src="{{ asset('images/MainLogo.png') }}" class="h-24 me-3 rounded-full border-2 border-white" alt="REC Logo" />
                    <span class="self-center text-3xl font-semibold whitespace-nowrap text-white">
                        <br>Radio Engineering<br>Circle Inc.
                    </span>
                </a>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-x-16 gap-y-6">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase">About</h2>
                    <ul class="text-white font-medium">
                        <li class="mb-4"><a href="{{ url('/aboutRec') }}">Our Vision</a></li>
                        <li class="mb-4"><a href="{{ url('/aboutRec') }}">Our Mission</a></li>
                        <li class="mb-4"><a href="{{ url('/aboutRec') }}">Our Goal</a></li>
                        <li class="mb-4"><a href="{{ url('/aboutRec') }}">Our Credentials</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase">Community</h2>
                    <ul class="text-white font-medium">
                        <li class="mb-4"><a href="{{ url('/events') }}">Events</a></li>
                        <li class="mb-4"><a href="{{ url('/events') }}">Government</a></li>
                        <li class="mb-4"><a href="{{ url('/events') }}">Partnership</a></li>
                        <li class="mb-4"><a href="{{ url('/events') }}">Sponsorship</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase">Social</h2>
                    <ul class="text-white font-medium">
                        <li class="mb-4"><a href="https://www.facebook.com/REC.org.ph">Facebook</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-white uppercase">Contacts</h2>
                    <ul class="text-white font-medium">
                        <li class="mb-4"><a href="{{ url('/contactUs') }}">0917 541 8836</a></li>
                        <li class="mb-4"><a href="{{ url('/contactUs') }}">radio@rec.org.ph</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-white sm:mx-auto lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-white sm:text-center">© 2024 RECInc.™. All Rights Reserved.</span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:underline ms-5">Terms and Conditions</a>
                <a href="#" class="text-gray-500 hover:underline ms-5">Privacy and Policy</a>
            </div>
        </div>
    </div>
</footer>
