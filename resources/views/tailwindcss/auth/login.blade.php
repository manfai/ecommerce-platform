<x-layout>
  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center">

    <div class="relative bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
      <img src="https://www.ikea.com.hk/dairyfarm/hk/pageImages/page__en_hk_1575431456__1.jpeg" alt="" class="w-full h-full object-cover">
      <div class="absolute top-0 left-0 w-full h-full bg-opacity-50 bg-deep-purple-accent-700">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
          <div class="w-full max-w-xl mb-12 pt-24 xl:mb-0 xl:pr-16 xl:w-7/12">

            <x-logo class="w-20 -mt-6 text-white">
              <span class="ml-2 text-4xl font-black tracking-wide text-white uppercase">{{ config('app.name') }}</span>
            </x-logo>

            <h2 class="max-w-lg mt-6 mb-6 font-sans text-3xl tracking-tight text-white sm:text-4xl sm:leading-none">
              The quick, brown fox <br class="hidden md:block" />
              jumps over a <span class="text-teal-accent-400">lazy dog</span>
            </h2>
            <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
            </p>
            <a href="/" aria-label="" class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-teal-accent-400 hover:text-teal-accent-700">
              Learn more
              <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">

      <div class="w-full h-100">

        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>

        <form class="mt-6" method="POST" action="{{ route('login') }}">
          @csrf
          <div>
            <label class="block text-gray-700">Email Address</label>
            <input type="email" name="email" id="" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
          </div>

          <div class="mt-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" id="" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                  focus:bg-white focus:outline-none" required>
          </div>

          <div class="text-right mt-2">
            <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
          </div>
          <!-- 
          <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-6">Log In</button> -->
          <button type="submit" class="inline-flex mt-6 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
            Log in
          </button>
        </form>

        <hr class="my-6 border-gray-300 w-full">

        <button type="button" class="inline-flex mt-6 items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-gray-600 transition duration-200 rounded border border-gray-300 focus:shadow-outline focus:outline-none">
          <div class="flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48">
              <defs>
                <path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
              </defs>
              <clipPath id="b">
                <use xlink:href="#a" overflow="visible" />
              </clipPath>
              <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
              <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
              <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
              <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
            </svg>
            <span class="ml-4">
              Log in
              with
              Google</span>
          </div>
        </button>

        <p class="mt-8">Need an account? <a href="{{route('register')}}" class="text-blue-500 hover:text-blue-700 font-semibold">Create an
            account</a></p>


      </div>
    </div>

  </section>
</x-layout>