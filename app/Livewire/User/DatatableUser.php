<?php

namespace App\Livewire\User;

use App\Models\Tenant;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class DatatableUser extends Component
{
    use WithPagination;
    public $users = [];
    public $tenant;
    public $tenant_id;

    public function mount($tenant_id){
        $this->tenant_id = $tenant_id;
        $this->tenant = Tenant::find($tenant_id);
        $this->users = $this->tenant->users;
    }

    #[On('reload-user-table')]
    public function getUsers(){
        $this->tenant = Tenant::find($this->tenant_id);
        $this->users = $this->tenant->users;
    }

    public function render()
    {
        return view('livewire.user.datatable-user');
    }
}
