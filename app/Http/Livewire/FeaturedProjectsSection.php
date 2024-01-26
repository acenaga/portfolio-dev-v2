<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FeaturedProjectsSection extends Component
{
    public function render()
    {

        $user = User::find(1)->with('featuredProjects')->first();

        $projects = $user->featuredProjects;

        return view('livewire.featured-projects-section', compact('projects'));
    }
}
