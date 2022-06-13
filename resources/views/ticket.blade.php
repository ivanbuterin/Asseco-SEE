<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novi ticket') }}
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
                    <form action="/ticketcontrol" method="POST">
                        @csrf
                          <label for="fname"><strong>Naziv:</strong></label><br>
                          <input type="text" id="fname" name="fname"><br>
                          <label for="opis"><strong>Opis:</strong></label><br>
                          <textarea id="opis" name="opis" rows="4" cols="50"></textarea><br>
                          <label for="klijent"><strong>Klijent:</strong></label></br>
                        <select id="search_client" name="klijent"  required>
                           <option value="" disabled selected>Izaberi klijenta: </option>
                           @foreach ($clients as $c)
                              <option value="{{ $c->id }}">{{ $c->name }}</option>
                           @endforeach
                        </select> <br>
                         <label for="tehnicar"><strong>Tehničar:</strong></label></br>
                        <select id="search_tehnicar" name="tehnicar"  required>
                           <option value="" disabled selected>Izaberi tehničara: </option>
                           @foreach ($technicians as $t)
                              <option value="{{ $t->id }}">{{ $t->name }}</option>
                           @endforeach
                        </select> <br><br>
                          <div class="button"><input type="submit" value="Spremi" class="button"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
