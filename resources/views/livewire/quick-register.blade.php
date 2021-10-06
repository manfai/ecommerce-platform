<div class="bg-white rounded shadow-2xl p-7 sm:p-10">
    <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
        Sign up for shopping
    </h3>
    <form>
        <div class="mb-1 sm:mb-2">
            <label for="firstName" class="inline-block mb-1 font-medium">{{__('Email Address')}}</label>
            <input placeholder="John" required="" type="text" class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" id="firstName" name="firstName" />
        </div>
        <div class="mb-1 sm:mb-2">
            <label for="lastName" class="inline-block mb-1 font-medium">{{ __('Password') }}</label>
            <input type="password" name="" id="" placeholder="Enter Password" minlength="6"  class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-1 sm:mb-2">
            <label for="email" class="inline-block mb-1 font-medium">{{ __('Confirm Password') }}</label>
            <input type="password" name="" id="" placeholder="Enter Password" minlength="6"  class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mt-4 mb-2 sm:mb-4">
            <button type="submit" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                Submit
            </button>
        </div>
        <p class="text-xs text-gray-600 sm:text-sm">
            We respect your privacy. Unsubscribe at any time.
        </p>
    </form>
</div>