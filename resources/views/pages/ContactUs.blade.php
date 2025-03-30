@extends('layouts.app')
@section('content')
@vite(['resources/css/contactUs.css'])

<section class="relative w-full h-[500px] bg-fixed bg-center bg-cover bg-[url('{{ asset('images/home/contactUs/ContactUs.png') }}')]">
  <div class="absolute inset-0 bg-black bg-opacity-30"></div>
</section>

<div class="bg-white text-white py-16 px-8">
    <div class="max-w-4xl mx-auto text-center">
        <img src="{{ asset('images/home/contactUs/Contact.png') }}" class="mx-auto w-16 h-16" alt="Contact Icon">
        
        <h2 class="text-4xl text-[#132080] font-bold italic mt-2 shrikhand-regular">TALK TO US</h2>
        <p class="mt-2 text-xl text-gray-600 fs-elliot">Let's connect! We're here to listen, collaborate, and bring your ideas to life—reach out today!</p>
    </div>

    <!-- <div class="max-w-2xl mx-auto bg-white p-8 mt-8">
        <form action="#" method="POST">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-black text-xl font-bold flex items-center fs-elliot">
                        <img src="{{ asset('images/home/contactUs/Name.png') }}" class="w-6 h-6 mr-2" alt="User Icon">
                        First Name
                    </label>
                    <input type="text" class="text-black w-full mt-1 p-2 border-b border-[#132080] bg-transparent outline-none placeholder-gray" placeholder="Ex. Juan">
                </div>
                <div>
                    <label class="block text-black text-lg font-bold flex items-center fs-elliot">
                        <img src="{{ asset('images/home/contactUs/Name.png') }}" class="w-6 h-6 mr-2" alt="User Icon">
                        Last Name
                    </label>
                    <input type="text" class="text-black w-full mt-1 p-2 border-b border-[#132080] bg-transparent outline-none placeholder-gray" placeholder="Ex. Dela Cruz">
                </div>
                <div>
                    <label class="block text-black text-lg font-bold flex items-center fs-elliot">
                        <img src="{{ asset('images/home/contactUs/Number.png') }}" class="w-6 h-6 mr-2" alt="ID Icon">
                        REC Number
                    </label>
                    <input type="text" class="text-black w-full mt-1 p-2 border-b border-[#132080] bg-transparent outline-none placeholder-gray" placeholder="Ex. 16-00001">
                </div>
                <div>
                    <label class="block text-black text-lg font-bold flex items-center fs-elliot">
                        <img src="{{ asset('images/home/contactUs/Callsign.png') }}" class="w-6 h-6 mr-2" alt="Callsign Icon">
                        Callsign
                    </label>
                    <input type="text" class="text-black w-full mt-1 p-2 border-b border-[#132080] bg-transparent outline-none placeholder-gray" placeholder="Ex. AY2MNCV">
                </div>
                <div>
                    <label class="block text-black text-lg font-bold flex items-center fs-elliot">
                        <img src="{{ asset('images/home/contactUs/Membership.png') }}" class="w-6 h-6 mr-2" alt="Membership Icon">
                        Membership Type
                    </label>
                    <select class="w-full mt-2 p-2 text-black border-b border-[#132080] bg-transparent outline-none">
                        <option value="" disabled selected hidden>Select a type</option>
                        <option class="bg-white text-black hover:bg-red" value="regular">Regular</option>
                        <option class="bg-white text-black hover:bg-red" value="associate">Associate</option>
                    </select>
                </div>
                <div>
                    <label class="block text-black text-lg font-bold flex items-center fs-elliot">
                        <img src="{{ asset('images/home/contactUs/Section.png') }}" class="w-6 h-6 mr-2" alt="Section Icon">
                        Section
                    </label>
                    <select class="w-full mt-2 p-2 text-black border-b border-[#132080] bg-transparent outline-none">
                        <option value="" disabled selected hidden>Select a section</option>
                        <option class="bg-white text-black" value="national">National</option>
                        <option class="bg-white text-black" value="batangas">Batangas</option>
                        <option class="bg-white text-black" value="pangasinan">Pangasinan</option>
                        <option class="bg-white text-black" value="mindoro">Mindoro</option>
                        <option class="bg-white text-black" value="mindanao">Mindanao</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <div>
                    <label class="block text-black text-lg font-bold flex items-center fs-elliot">
                        <img src="{{ asset('images/home/contactUs/Email.png') }}" class="w-6 h-6 mr-2" alt="Email Icon">
                        Your email
                    </label>
                    <input type="text" class="text-black w-full mt-1 p-2 border-b border-[#132080] bg-transparent outline-none placeholder-gray" placeholder="Ex. juandelacruz@gmail.com">
                </div>
                <div>
                    <label class="block text-black text-lg font-bold flex items-center fs-elliot">
                        <img src="{{ asset('images/home/contactUs/Phone.png') }}" class="w-6 h-6 mr-2" alt="Phone Icon">
                        Phone Number
                    </label>
                    <input type="text" class="text-black w-full mt-1 p-2 border-b border-[#132080] bg-transparent outline-none placeholder-gray" placeholder="+63│000-0000-000">
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-black text-lg font-bold flex items-center fs-elliot">
                    <img src="{{ asset('images/home/contactUs/Message.png') }}" class="w-6 h-6 mr-2" alt="Message Icon">
                    Your message
                </label>
                <textarea class="w-full mt-2 p-2  text-black border-b border-[#132080] bg-transparent outline-none placeholder-gray"  placeholder="Leave a comment..."></textarea>
            </div>
            <p class="text-md text-black mt-4">By submitting this form you agree to our <a href="#" class="text-blue-400">terms and conditions</a> and our <a href="#" class="text-blue-400">privacy policy</a>.</p>
            <div class="text-center">
                <button type="submit" class="mt-4 bg-[#5E6FFB] text-xl text-white px-4 py-2 rounded hover:bg-[#132080] fs-elliot">
                    SEND MESSAGE
                </button>
            </div>
        </form>
    </div> -->


<div class="max-w-4xl mx-auto mt-12 grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
    <div>
        <div class="p-4 rounded-lg inline-block">
            <img src="{{ asset('images/home/contactUs/Visit.png') }}" alt="Email Icon" class="w-12 h-12 mx-auto">
        </div>
        <h3 class="mt-4 text-xl text-black font-bold fs-elliot">Visit Us</h3>
        <p class="text-gray-400 text-lg">Room 407 Bld. A, PUP-Taguig Campus, 
            General Santos Avenue, Lower Bicutan, Taguig, PH</p>
        <a href="mailto:hello@flowbite.com" class="text-blue-400 text-lg">Google Maps</a>
    </div>

    <div>
        <div class="p-4 rounded-lg inline-block">
            <img src="{{ asset('images/home/contactUs/Phone.png') }}" alt="Phone Icon" class="w-12 h-12 mx-auto">
        </div>
        <h3 class="mt-4 text-xl text-black font-bold fs-elliot">Contact Us</h3>
        <p class="text-gray-400 text-lg"> Have a question? Need assistance? Give us a call, and our friendly team will be happy to help!</p>
        <a href="tel:+16467865060" class="text-blue-400 text-lg">+63 917 541 8836</a>
    </div>

    <div>
        <div class="p-4 rounded-lg inline-block">
            <img src="{{ asset('images/home/contactUs/Email.png') }}" alt="Email Icon" class="w-12 h-12 mx-auto">
        </div>
        <h3 class="mt-4 text-xl text-black font-bold fs-elliot">Email Us</h3>
        <p class="text-gray-400 text-lg">Whether it's a query, or collaboration, drop us an email, and we’ll get back to you.</p>
        <a href="#" class="text-blue-400 text-lg">radio@rec.org.ph</a>
    </div>

    <div>
        <div class="p-4 rounded-lg inline-block">
            <img src="{{ asset('images/home/contactUs/Facebook.png') }}" alt="Facebook Icon" class="w-12 h-12 mx-auto">
        </div>
        <h3 class="mt-4 text-xl text-black font-bold fs-elliot">Facebook</h3>
        <p class="text-gray-400 text-lg">Follow us on Facebook for updates, events, and the latest news from our community.</p>
        <a href="#" class="text-blue-400 text-lg">Radio Engineering Circle</a>
    </div>
</div>

<section class="bg-white py-12">
  <div class="max-w-6xl mx-auto text-center">
    <p class="mt-4 text-xl text-gray-600 fs-elliot">
      Find us at our headquarters below.
    </p>

    <div class="w-full h-96 mt-6 rounded-lg shadow-lg overflow-hidden">
      <iframe
        width="100%"
        height="100%"
        style="border:0;"
        loading="lazy"
        allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=Manila,Philippines">
      </iframe>
    </div>
  </div>
</section>

</div>

@endsection