<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class PortfolioCategoryController
{
    public function __invoke(Request $request): View
    {

        return view(
            view: 'dashboard.portfolio-category',
            data:[
                'title' => 'Portfolio Categories'
            ]
        );
    }
}
