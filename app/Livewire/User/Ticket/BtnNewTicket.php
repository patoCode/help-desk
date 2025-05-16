<?php

namespace App\Livewire\User\Ticket;

use App\Models\Category;
use App\Models\Tenant;
use App\Models\Ticket;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BtnNewTicket extends Component
{
    public $categories;
    public $tenant_id;

    #[Validate('required')]
    public $category_id;
    #[Validate('required')]
    public $description;
    public function mount(){
        // TODO filtrar categoria por usuario en tenant
        $this->tenant_id = 2;
        $tenants = Tenant::find($this->tenant_id);
        $this->categories = $tenants->categories;
    }

    public function save(){
        $validatedData = $this->validate();
        $category = Category::find($this->category_id);

        $ticket = new Ticket();
        $ticket->code = $category->code.' >> '.date('YmdHis');
        $ticket->detail = $this->description;
        $ticket->type = 'USER';

        $ticket->category_id = $this->category_id;
        $ticket->from_user = 16;
        $ticket->fecha_reg = date("Y-m-d H:i:s");

        $ticket->save();

        session()->flash("success", "Ticket created successfully ".$ticket->code);

    }

    public function render()
    {
        return view('livewire.user.ticket.btn-new-ticket');
    }
}
