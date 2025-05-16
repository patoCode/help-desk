<?php

namespace App\Livewire\User;

use App\Models\Tenant;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BtnEditUser extends Component
{
    public $user_id;
    #[Validate("required")]
    public $name;
    #[Validate("required")]
    public $email;
    #[Validate("required|min:4")]
    public $username;
    #[Validate("required|min:4")]
    public $password;
    public $user;

    public function mount($user_id){
        $this->user_id = $user_id;
        $this->user = User::findOrFail($user_id);
    }



    public function render()
    {
        return view('livewire.user.btn-edit-user');
    }
}
