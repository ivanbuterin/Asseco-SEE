<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Uredi informacije') }}
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
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/ticketupdate/{{ $ticket->id }}" method="POST">
                        @csrf
                        @method('PUT')
                          <label for="fname"><strong>Naziv:</strong></label><br>
                          <input type="text" id="fname" name="fname" placeholder= "{{ $ticket->name}}" ><br>
                          <label for="opis"><strong>Opis:</strong></label><br>
                          <textarea id="opis" name="opis" rows="4" cols="50" placeholder= "{{ $ticket->description}}"></textarea><br>
                          <div class="button"><input type="submit" value="Spremi" class="button"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
