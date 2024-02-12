<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\PortfolioCategory;
use App\Models\User;
use Livewire\Component;

class PortfolioSection extends Component
{
    public function render()
    {

        // $user = User::find(1)->first();

        $categories = PortfolioCategory::all();

        $portfolio = User::find(1)->first()->portfolios()->with('portfolio_images', 'category')->get();

        return view('livewire.portfolio-section', compact('portfolio', 'categories'));
    }
}
