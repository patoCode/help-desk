<?php

namespace App\Livewire\User;

use App\Models\Tenant;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BtnAddUser extends Component
{
    public $tenant_id;
    #[Validate("required")]
    public $name;
    #[Validate("required")]
    public $email;
    #[Validate("required|min:4")]
    public $username;
    #[Validate("required|min:4")]
    public $password;
    public $tenant;

    public function mount($tenant_id){
        $this->tenant_id = $tenant_id;
        $this->tenant = Tenant::findOrFail($tenant_id);
    }

    public function save(){
        $validated = $this->validate();
        $user = new User();
        $user->name = $this->name;
        $user->username = $this->username;
        $user->password = bcrypt($this->password);
        $user->email = $this->email;
        $user->status = 'active';
        $user->save();
        $user->tenants()->attach($this->tenant, ['status' => 'active']);
        $this->dispatch('user-saved');
        $this->dispatch('reload-user-table');
        $this->reset();

        return session()->flash('message', 'User created successfully');
    }

    public function render()
    {
        return view('livewire.user.btn-add-user');
    }
}
