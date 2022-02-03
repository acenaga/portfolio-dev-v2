<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AboutMeSection extends Component
{
    public function render()
    {
        $user = User::find(1)->with('professional_skills')->first();

        return view('livewire.about-me-section', compact('user'));

    }
}
