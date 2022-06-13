<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vaši ticketi') }}
        </h2>
    </x-slot>

    <style>
        .dugmic {
            color: white;
        }
    </style>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @forelse ($tickets as $ticket)
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $ticket->name }}
                
                <div class="dugmic"><button type="button" style="float:right; background-color: seagreen;">Otvori</button></div>
                </div>
            @empty
                <div class="p-6 bg-white border-b border-gray-200">
                    Nema ticketa.
                </div>
            @endforelse
        </div>
    </div>
</div>
</x-app-layout>
