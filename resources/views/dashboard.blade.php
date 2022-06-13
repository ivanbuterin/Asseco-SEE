<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Dobrodošli u ticketing sustav! Molim odaberite svoju ulogu.
                    <br></br>
                    <form action="/usercontrol" method="GET">
                         <input type="radio" id="agent" name="radio1" value="Agent">
                         <label for="agent">Agent</label><br>
                         <input type="radio" id="tehnicar" name="radio1" value="Tehničar">
                         <label for="tehnicar">Tehničar</label><br><br>
                         <input type="submit" style="background-color: springgreen; font-size: 24px;" value="Kreni"><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
