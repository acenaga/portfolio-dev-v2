<?php

namespace App\Http\Livewire;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Livewire\Component;
use Livewire\WithFileUploads;


class CrudPortfolioItem extends Component
{

    use WithFileUploads;

    public $items;

    public $title;
    public $sub_title;
    public $description;
    public $url;
    public $image;
    public $caption_image;
    public $keywords;
    public $categories;
    public $category_id;

    public function mount(){

        $this->items = Portfolio::all();

        $this->categories = PortfolioCategory::all();

        //dd($this->items[0]->portfolio_images()->get());
        //TODO retrieve the number of portfolio items using the category
        //$this->categories = PortfolioCategory::withCount(Portfolio::all())->get();


    }

    public function render()
    {
        return view('livewire.crud-portfolio-item');
    }

    public function deleteItem($id)
    {
        Portfolio::find($id)->delete();
        $this->items = Portfolio::all();
        session()->flash('message', 'Item has deleted');
    }

    public function save()
    {

        $this->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'image' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'caption_image' => 'required',
            'keywords' => 'required'
        ]);

        Portfolio::create([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'image' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
            'caption_image' => 'required',
            'keywords' => 'required'
        ]);


    }
}
