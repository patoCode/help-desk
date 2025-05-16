<?php

namespace App\Livewire\Category;

use App\Models\Category;
use App\Models\Tenant;
use Livewire\Component;

class Datatable extends Component
{
    public $categories;

    public function mount($tenant_id)
    {
        $this->tenant_id = $tenant_id;
        $this->getCategories();
    }

    public function getCategories(){
        $tenant_id = $this->tenant_id;
        $tenant = Tenant::with(['categories'])->find($tenant_id);
        $this->categories = $tenant->categories;
    }


    public function render()
    {
        return view('livewire.category.datatable');
    }
}
