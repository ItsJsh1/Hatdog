<!-- REC  NAVBAR -->
<x-navbar>
</x-navbar>

<!-- INTRODUCTION SECTION -->
<section class="bg-white py-12">
  <div class="max-w-4xl mx-auto text-center">
    <!-- Title with letter spacing -->
    <h1 class="text-4xl font-extrabold tracking-wider text-gray-900 sm:text-5xl mt-2">
      Contact US
    </h1>

    <!-- Description text -->
    <p class="mt-6 text-lg leading-7 text-gray-600">
        Any question or remarks? Just write us a message!
    </p>
  </div>
</section>
<!-- END OF INTRODUCTION SECTION -->
 
<!-- CONTACT DETAILS SECTION -->
<section class="bg-white py-12" id="contact-details">
  <div class="max-w-4xl mx-auto px-6">
    <div class="text-left mb-8 text-justify">
      <!-- Title -->
      <h2 class="text-2xl font-bold text-gray-800 mb-2 tracking-wide">
        Get in Touch with Us Ka-Circle!
      </h2>
      <!-- Description -->
      <p class="text-gray-600">
        We at the Radio Engineering Circle welcome your thoughts, questions, and ideas—your feedback helps us grow together as a community. Feel free to send us a message anytime; we’re here to connect and support your journey in radio engineering!
      </p>
    </div>

    <!-- Contact Details -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Address -->
      <div class="flex items-center bg-gray-200 rounded-lg p-4 shadow transition-transform transform hover:scale-105 hover:bg-gray-300">
        <div class="w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center">
          📍
        </div>
        <div class="ml-4">
          <p class="font-bold text-gray-800">Address</p>
          <p class="text-gray-600 text-sm">PUP-CEA Building, Manila, Philippines</p>
        </div>
      </div>

      <!-- Mobile Number -->
      <div class="flex items-center bg-gray-200 rounded-lg p-4 shadow transition-transform transform hover:scale-105 hover:bg-gray-300">
        <div class="w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center">
          📞
        </div>
        <div class="ml-4">
          <p class="font-bold text-gray-800">Mobile Number</p>
          <p class="text-gray-600 text-sm">0917 892 8852</p>
        </div>
      </div>

      <!-- Email -->
      <div class="flex items-center bg-gray-200 rounded-lg p-4 shadow transition-transform transform hover:scale-105 hover:bg-gray-300">
        <div class="w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center">
          ✉️
        </div>
        <div class="ml-4">
          <p class="font-bold text-gray-800">Email</p>
          <p class="text-gray-600 text-sm">radio@rec.org.ph</p>
        </div>
      </div>

      <!-- Availability -->
      <div class="flex items-center bg-gray-200 rounded-lg p-4 shadow transition-transform transform hover:scale-105 hover:bg-gray-300">
        <div class="w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center">
          ⏰
        </div>
        <div class="ml-4">
          <p class="font-bold text-gray-800">Availability</p>
          <p class="text-gray-600 text-sm">7:00 AM - 10:00 PM</p>
        </div>
      </div>

      <!-- Website -->
      <div class="flex items-center bg-gray-200 rounded-lg p-4 shadow transition-transform transform hover:scale-105 hover:bg-gray-300">
        <div class="w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center">
          🌐
        </div>
        <div class="ml-4">
          <p class="font-bold text-gray-800">Website</p>
          <p class="text-gray-600 text-sm">pup.rec.org.ph</p>
        </div>
      </div>

      <!-- Facebook -->
      <div class="flex items-center bg-gray-200 rounded-lg p-4 shadow transition-transform transform hover:scale-105 hover:bg-gray-300">
        <div class="w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center">
          📘
        </div>
        <div class="ml-4">
          <p class="font-bold text-gray-800">Facebook</p>
          <p class="text-gray-600 text-sm">Radio Engineering Circle</p>
        </div>
      </div>
    </div>

    <!-- Socials -->
    <div class="mt-8 text-center">
      <p class="text-gray-600 font-medium">Socials</p>
      <div class="flex justify-center space-x-4 mt-4">
        <!-- Social Icon 1 -->
        <span class="w-6 h-6 bg-gray-400 rounded-full hover:bg-gray-600 transition-colors transform hover:scale-110"></span>
        <!-- Social Icon 2 -->
        <span class="w-6 h-6 bg-gray-400 rounded-full hover:bg-gray-600 transition-colors transform hover:scale-110"></span>
        <!-- Social Icon 3 -->
        <span class="w-6 h-6 bg-gray-400 rounded-full hover:bg-gray-600 transition-colors transform hover:scale-110"></span>
      </div>
    </div>
  </div>
</section>
<!-- END OF CONTACT DETAILS SECTION -->

<!-- GET IN TOUCH SECTION -->
<section class="bg-white py-12" id="get-in-touch">
  <div class="max-w-6xl mx-auto px-6">
    <!-- Get in Touch Title -->
    <div class="text-center mb-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-2 tracking-wide">
        Let us know what you think!
      </h2>
      <p class="text-gray-600">
        Give us feedbacks ka-Circle!
      </p>
    </div>

    <!-- Form Section -->
    <div class="bg-gray-200 rounded-lg shadow-md p-6">
      <form action="#" method="POST">
        <!-- First Name and Last Name -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
          <div>
            <label for="first-name" class="block text-sm font-medium text-gray-700">First Name *</label>
            <input
              type="text"
              id="first-name"
              name="first-name"
              class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500"
              required
            />
          </div>
          <div>
            <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name *</label>
            <input
              type="text"
              id="last-name"
              name="last-name"
              class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500"
              required
            />
          </div>
        </div>

        <!-- REC Number and Contact Number -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
          <div>
            <label for="rec-number" class="block text-sm font-medium text-gray-700">REC Number *</label>
            <input
              type="text"
              id="rec-number"
              name="rec-number"
              class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500"
            />
            <!-- Checkbox: Are you a member? -->
            <div class="mt-2">
              <label for="is-member" class="flex items-center text-sm text-gray-700">
                <input
                  type="checkbox"
                  id="is-member"
                  name="is-member"
                  class="h-4 w-4 text-gray-600 border-gray-300 rounded focus:ring-gray-500"
                />
                <span class="ml-2">Are you a member?</span>
              </label>
            </div>
          </div>
          <div>
            <label for="contact-number" class="block text-sm font-medium text-gray-700">Contact Number *</label>
            <input
              type="tel"
              id="contact-number"
              name="contact-number"
              class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500"
              required
            />
          </div>
        </div>

        <!-- Email -->
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email Address *</label>
          <input
            type="email"
            id="email"
            name="email"
            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500"
            required
          />
        </div>

        <!-- Message -->
        <div class="mb-4">
          <label for="message" class="block text-sm font-medium text-gray-700">Write Your Message</label>
          <textarea
            id="message"
            name="message"
            rows="4"
            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-gray-500 focus:border-gray-500"
          ></textarea>
        </div>

        <!-- Submit Button -->
        <button
          type="submit"
          class="w-full bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-700 transition-colors focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
        >
          SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</section>
<!-- END OF GET IN TOUCH SECTION -->

<x-scroll>
</x-scroll>

<x-chatbot>
</x-chatbot>

<!-- REC FOOTER BAR -->
<x-footer>
</x-footer>