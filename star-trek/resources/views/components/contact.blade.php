<div id="contactForm">
    <div
      class="bg-top bg-no-repeat bg-cover"
      style="
        min-height: 75vh;
        height: 78vh;
        background-image: url(/images/HeroLight.jpeg);
      "
    >
      <div
        style="z-index: 1; min-height: 75vh"
        class="xl:max-w-6xl grid grid-cols-1 m-auto place-items-center"
      >
        <div
          data-aos="flip-left"
          data-aos-easing="ease-out-cubic"
          data-aos-duration="1000"
          style="z-index: 1"
          class="
            lg:w-1/2 lg:w-1/2
            md:w-3/4
            w-5/6
            shadow-xl
            p-6
            bg-white
            opacity-95
            rounded-lg
          "
        >
          <h1 class="md:text-6xl text-4xl text-coral font-bold text-header">
            Let's Talk.
          </h1>
          <h3 class="text-lg font-semibold">...something amazing is about to happen.</h3>
            <!-- Success message -->
            @if(Session::has('success'))
                <div class="alert alert-success bg-coral text-white p-2 mb-2 rounded">
                    {{Session::get('success')}}
                </div>
            @endif
    
            <form method="post" action="{{ route('contact.store') }}">

            @csrf

            <div class="form-group">
                <input placeholder="Name" type="text" class="w-full px-4 py-3 rounded mb-4 border border-gray-300 form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
            </div>

            <div class="form-group">
                <input placeholder="Email" type="email" class="w-full px-4 py-3 rounded mb-4 border border-gray-300 form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
            </div>

            <div class="form-group">
                <input placeholder="Subject" type="text" class="w-full px-4 py-3 rounded mb-4 border border-gray-300 form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                    id="subject">
            </div>

            <div class="form-group">
                <textarea Placeholder="Message" class="w-full px-4 py-3 rounded mb-4 border border-gray-300 form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                    rows="3"></textarea>
            </div>

            <input type="submit" name="send" value="Submit" class="w-full
                font-bold
                text-white
                button-green
                py-3
                px-6
                shadow-xl
                rounded
                m-auto">
            </form>
        </div>
      </div>

      <div
        class="w-screen m-auto h-48 mt-6 bg-white"
      >
        <p class="text-base geo text-center m-auto">
          Made with &#10084;&#65039; by Mallory &copy; 2021
        </p>
        <div 
        data-aos="zoom-in"
        data-aos-duration="2000"
        class="flex justify-center flex-row m-auto">
          <div>
            <img
              class="h-8 m-3"
              src="/images/skillsIcons/vue.svg"
              alt="vue icon"
            />
          </div>
          <div>
            <img
              class="h-8 m-3"
              src="/images/skillsIcons/laravel.svg"
              alt="laravel icon"
            />
          </div>
          <div>
            <img
              class="h-8 m-3"
              src="/images/skillsIcons/tailwindcss.svg"
              alt="tailwindcss icon"
            />
          </div>
        </div>
      </div>
    </div>
  </div>



