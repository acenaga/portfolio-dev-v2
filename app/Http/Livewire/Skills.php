<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Skills extends Component
{
    public function render()
    {

        $user = User::find(1)->with('professional_skills', 'technical_skills')->first();

        $professional_skills = $user->professional_skills;

        $technical_skills = $user->technical_skills;

        return view('livewire.skills', compact('professional_skills', 'technical_skills'));
    }
}
