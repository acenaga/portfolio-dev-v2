<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class HomeSection extends Component
{
    public function render()
    {

        $user = User::find(1)->with('social_medias')->first();

        // dd($user);

        return view('livewire.home-section', compact('user'));
    }
}
