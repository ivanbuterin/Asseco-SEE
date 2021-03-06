<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vaši ticketi') }}
        </h2>
    </x-slot>

    <style>
        .button {
      position:relative;
      color:white;
      text-decoration:none;
      border-radius:5px;
      border:solid 1px #2E8B57;
      background:#2E8B57;
      text-align:center;
      /*padding:16px 18px 14px;*/

      -webkit-transition: all 0.1s;
      -moz-transition: all 0.1s;
      transition: all 0.1s;
    }
    </style>

 

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($tickets as $ticket) 
                <div class="p-6 bg-white border-b border-gray-200">
                    {{$ticket->name}}
                    <div style="float:right">
                    <a href="/ticketinfo/{{ $ticket->id }}"> <button type="button" style="background-color:green; color: white">Otvori</button></a>
                    <a href="/ticketedit/{{ $ticket->id }}"> <button type="button" style="background-color:skyblue; color: white">Uredi</button></a>
                    <a href="/ticketdelete/{{ $ticket->id }}"> <button type="button" style="background-color:darkred; color: white">Izbriši</button></a>
                    </div>
                </div>

                </div>
                @endforeach
            </div>
        </div>
</x-app-layout>
