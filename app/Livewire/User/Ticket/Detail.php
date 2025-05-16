<?php

namespace App\Livewire\User\Ticket;

use App\Models\Ticket;
use App\Models\TicketEvents;
use Livewire\Component;

class Detail extends Component
{
    public $ticket_id;
    public $events;
    public $ticket;

    public function mount($ticket_id){
        $this->ticket_id = $ticket_id;
        $this->ticket = Ticket::findOrFail($ticket_id);
        $this->getData();
    }

    public function getData(){
        $ticketId = $this->ticket_id;
        $this->events = TicketEvents::where('ticket_id', $ticketId)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function render()
    {
        return view('livewire.user.ticket.detail');
    }
}
