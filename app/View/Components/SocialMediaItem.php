<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\View\Component;

class SocialMediaItem extends Component
{
    /**
     * The social media data.
     *
     * @var mixed
     */
    public $social;

    /**
     * Create a new component instance.
     *
     * @param mixed $socialMedia
     * @return void
     */
    public function __construct($socialMedia)
    {
        $this->social = $socialMedia;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.social-media-item');
    }
}
