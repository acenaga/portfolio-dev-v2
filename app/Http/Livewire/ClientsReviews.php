<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ClientsReviews extends Component
{
    public function render()
    {
        $user = User::find(1)->with('reviews')->first();

        return view('livewire.clients-reviews', compact('user'));
    }
}
