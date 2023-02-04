<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">

                <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                    <img class="w-full h-48" src="{{ Storage::url($event->image) }}"
                         alt="Image" />
                    <div class="px-6 py-4">
                        <p class="leading-normal text-gray-700">{{ $event->description }}</p>
                    </div>

                </div>
        </div>
        </div>
</x-guest-layout>