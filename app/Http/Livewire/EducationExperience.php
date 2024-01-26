<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EducationExperience extends Component
{
    public function render()
    {

        $user = User::find(1)->with('education')->first();

        $education = $user->education;

        return view('livewire.education-experience', compact('education'));
    }
}
