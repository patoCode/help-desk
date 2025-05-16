<?php

namespace App\Livewire\User\Ticket;

use App\Models\Ticket;
use Livewire\Component;

class Datatable extends Component
{
    public $tickets;

    public function mount()
    {
        $this->getTickets();
    }

    public function getTickets(){
        $userId = 16;
        $tenantId = 2;
        $this->tickets = Ticket::where('from_user', $userId)
            ->whereHas('user.userTenants', function ($q) use ($tenantId) {
                $q->where('tenant_id', $tenantId)
                    ->where('status', 'active');
            })
            ->with(['category', 'queue', 'technician'])
            ->get();
    }


    public function render()
    {
        return view('livewire.user.ticket.datatable');
    }
}
