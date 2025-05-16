<?php

namespace App\Livewire\Tech;

use App\Models\Technician;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Datatable extends Component
{
    public $techs;
    public $tenant_id;

    public function mount($tenant_id)
    {
        $this->tenant_id = $tenant_id;
        $this->getTechs();
    }

    #[On('load-techs')]
    public function getTechs(){
        $tenant = $this->tenant_id;
        $this->techs = User::whereHas('userTenants', function ($q) use ($tenant) {
            $q->where('tenant_id', $tenant)
                ->where('status', 'active');
        })
        ->whereHas('technician', function ($q) {
            $q->where('status', 'active');
        })
            ->with('technician')
            ->get();
    }


    public function render()
    {
        return view('livewire.tech.datatable');
    }
}
