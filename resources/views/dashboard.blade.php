<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Google Mops') }}
        </h2>

        <ul class="flex space-x-3 pt-2">
            <li class="text-blue-500 js-select-route" id="cars"><a href="#">Cars</a></li>
            <li class="text-green-500 js-select-route" id="walk"><a href="#">Walk</a></li>
            <li class="text-red-500 js-select-route" id="bus"><a href="#">Bus</a></li>
        </ul>
    </x-slot>

<div class="bg-gray-50 flex flex-col h-screen">
   <div id="map" class="flex-1 w-2/3 mx-auto p-4 text-lg bg-white h-full shadow-lg bg-gray-300"></div>

</div>
</x-app-layout>
