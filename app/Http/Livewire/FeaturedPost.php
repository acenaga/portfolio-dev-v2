<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FeaturedPost extends Component
{
    public function render()
    {

        $user = User::find(1)->with('posts')->first();

        $user->posts = $user->posts->take(3);

        return view('livewire.featured-post', compact('user'));
    }
}
