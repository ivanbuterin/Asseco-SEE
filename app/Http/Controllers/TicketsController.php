<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Status;
use App\Models\TicketUser;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $tickets = Ticket::where('id_agent', Auth::id())->get();
        return view('agent_ticket', [
            'tickets' => $tickets,
        ]);       
    }

    public function info($id) {

        $ticket = Ticket::where('id', $id)->first();
        return view('details', [
            'ticket' => $ticket,
        ]);       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTicketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketRequest $request)

    {
        $agent = Auth::id();

        $ticket = new Ticket();
        $ticket->name = $request->fname;
        $ticket->description = $request->opis;
        $ticket->id_agent = $agent;
        $ticket->id_client = $request->klijent;

        $ticket->save();

        $ticket_id = $ticket->id;



       /*Ticket::query()->create([
       'name' => $request->fname,
       'description' => $request->opis,
        'id_agent' => $agent,
        'id_client' => $request->klijent,

        ]);*/



       TicketUser::query()->create([
       'technician_id' => $request->tehnicar,
       'ticket_id' => $ticket_id,

        ]);

       Status::query()->create([
       'ticket_id' => $ticket_id,
       'progress' => "Otvoren",

        ]);

       return redirect('dashboard');

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTicketRequest  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
