<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ServiceSection extends Component
{
    public function render()
    {

        $user = User::find(1)->with('services')->first();

        $services = $user->services;

        return view('livewire.service-section', compact('services'));
    }
}
