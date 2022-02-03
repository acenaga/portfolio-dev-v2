<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;


class HomeSection extends Component
{
    public function render()
    {

        $user = User::find(1);

        return view('livewire.home-section', compact('user'));
    }
}
