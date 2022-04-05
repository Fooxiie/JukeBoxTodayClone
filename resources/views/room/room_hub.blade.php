<x-app-layout>
    <x-centerdiv>
        <div class="max-w-6xl">
            <div class="bg-gray-700 text-gray-200 shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-200">Room personnel</h3>
                    <p class="mt-1 max-w-2xl text-sm ">Liste des rooms disponible ! 🎶</p>
                </div>
                <div class="border-t border-gray-700">
                    <dl>
                        @php($onOff = true)
                        @foreach(\App\Models\Room::all() as $elmt)
                            @if ($onOff)
                                <div class="bg-gray-500 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    {{$elmt->name}}
                                    <x-btn>S'y rendre ! 🙃</x-btn>
                                </div>
                                @php($onOff = false)
                            @else
                                <div class="bg-gray-600 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    {{$elmt->name}}
                                    <x-btn>S'y rendre ! 🙃</x-btn>
                                </div>
                                @php($onOff = true)
                            @endif
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>
    </x-centerdiv>
</x-app-layout>
