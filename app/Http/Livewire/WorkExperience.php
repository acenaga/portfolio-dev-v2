<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class WorkExperience extends Component
{
    public function render()
    {

        $user = User::find(1)->with('experiences.responsibilities')->first();

        $experiences = $user->experiences;

        //dd($experiences);
        return view('livewire.work-experience', compact('experiences'));
    }
}
