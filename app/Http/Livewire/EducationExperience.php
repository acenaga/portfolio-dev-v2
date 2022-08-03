<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class EducationExperience extends Component
{
    public function render()
    {

        $user = User::find(1)->with('education')->first();

        $education = $user->education;

        return view('livewire.education-experience', compact('education'));
    }
}
