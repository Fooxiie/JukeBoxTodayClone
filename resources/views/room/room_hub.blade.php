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
                        @foreach($rooms as $elmt)
                            @if ($onOff)
                                <div class="bg-gray-500 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 flex">
                                    {{$elmt->name}}
                                    <x-btn :href="route('room', ['name' => $elmt->name])">S'y rendre ! 🙃</x-btn>
                                    <x-btn :href="route('room.delete', ['id' => $elmt->id])" class="inline-flex text-center
                                        px-4 py-2 bg-red-700 border border-transparent rounded-md
                                        font-semibold text-xs text-gray-200 font-bold uppercase tracking-widest
                                        hover:bg-red-400 active:bg-gray-900 focus:outline-none
                                        focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25
                                        transition ease-in-out duration-150 hover:text-black text-center">Supprimer ❌</x-btn>
                                </div>
                                @php($onOff = false)
                            @else
                                <div class="bg-gray-600 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 flex">
                                    {{$elmt->name}}
                                    <x-btn :href="route('room', ['name' => $elmt->name])">S'y rendre ! 🙃</x-btn>
                                    <x-btn :href="route('room.delete', ['id' => $elmt->id])" class="inline-flex text-center
                                        px-4 py-2 bg-red-700 border border-transparent rounded-md
                                        font-semibold text-xs text-gray-200 font-bold uppercase tracking-widest
                                        hover:bg-red-400 active:bg-gray-900 focus:outline-none
                                        focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25
                                        transition ease-in-out duration-150 hover:text-black text-center">Supprimer ❌</x-btn>
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
