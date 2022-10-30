<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class FeaturedProjectsSection extends Component
{
    public function render()
    {

        $user = User::find(1)->with('featuredProjects')->first();

        $projects = $user->featuredProjects;

        return view('livewire.featured-projects-section', compact('projects'));
    }
}
