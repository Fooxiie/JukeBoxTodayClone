<x-app-layout>
    <x-centerdiv>
        <div id="titlediv" class="flex">
            <h1 class="text-2xl">{{$room->name}}</h1>
            <div class="flex" style="position: fixed;right: 10px;height: 40px;">
                <input id="urlShared" class="h-full align-middle" type="text" value="{{env('APP_URL')}}/{{$room->name}}" disabled/>
                <x-btn>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z"/>
                        <path
                            d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z"/>
                    </svg>
                </x-btn>
                <x-btn>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"/>
                    </svg>
                </x-btn>
            </div>
        </div>
    </x-centerdiv>
</x-app-layout>
<script>
    document.execCommand("copy");
</script>
