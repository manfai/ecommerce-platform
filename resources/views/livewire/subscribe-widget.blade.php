<div>
    <span class="text-base font-medium tracking-wide text-gray-300">{{__('Subscribe for updates')}}</span>
    <form wire:submit.prevent="saveContact" class="flex flex-col mt-4 md:flex-row">
        <input placeholder="Email" wire:model.defer="email" required="" type="email" class="flex-grow w-full h-12 px-4 mb-3 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none md:mr-2 md:mb-0 focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" />
        <button type="submit" class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
            {{__('Subscribe')}}
        </button>
    </form>
    <p class="mt-4 text-sm text-gray-500">
        {{__('Bacon ipsum dolor amet short ribs pig sausage prosciuto chicken spare ribs salami.')}}
    </p>
</div>