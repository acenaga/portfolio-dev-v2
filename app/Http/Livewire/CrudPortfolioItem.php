<?php

namespace App\Http\Livewire;

use App\Models\Portfolio;
use App\Models\PortfolioImage;
use App\Models\PortfolioCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;


class CrudPortfolioItem extends Component
{

    use WithFileUploads;

    public $items;
    public $isEdit = false;
    public $title;
    public $sub_title;
    public $description;
    public $url;
    public $image;
    public $caption_image;
    public $keywords;
    public $categories;
    public $category_id;
    public $images = [];
    public $itemId;

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

    function editItem($id)
    {

        $this->itemId = $id;
        $portfolioItem = Portfolio::find($id);

        $this->images = [];

        $this->title = $portfolioItem->title;
        $this->sub_title = $portfolioItem->sub_title;
        $this->description = $portfolioItem->description;
        if(strpos($portfolioItem->image, "via")){
            $this->image = $portfolioItem->image;
        }else{
            $this->image = $portfolioItem->get_image;
        }
        $this->url = $portfolioItem->link;
        $this->caption_image = $portfolioItem->caption_image;
        $this->keywords = $portfolioItem->keywords;
        $this->category_id = $portfolioItem->category_id;
        if(count($portfolioItem->portfolio_images()->get()) >= 1){
            $this->images = $portfolioItem->portfolio_images()->get();
        }

        $this->isEdit = true;
    }

    public function storeItem()
    {
        $this->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'caption_image' => 'required',
            'keywords' => 'required',
            'category_id' => 'required'
        ]);
        if($this->image){
            Storage::disk('public')->delete($this->image);
            $imageUpload = $this->image->store('files', 'public');
        }else{
            $imageUpload = $this->image;
        }

        Portfolio::find($this->itemId)->update([
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'description' => $this->description,
            'link' => $this->url,
            'image' => $imageUpload,
            'caption_image' => $this->caption_image,
            'keywords' => $this->keywords,
            'category_id' => $this->category_id
        ]);;


        session()->flash('message', 'Portfolio Item Edit Success!');


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
            'keywords' => 'required',
            'category_id' => 'required'
        ]);

        $imageUpload = $this->image->store('files', 'public');


        //dd($imageUpload);

        $portfolio = Portfolio::create([
            'user_id' => auth()->user()->id,
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'description' => $this->description,
            'link' => $this->url,
            'image' => $imageUpload,
            'caption_image' => $this->caption_image,
            'keywords' => $this->keywords,
            'category_id' => $this->category_id
        ]);

        $portfolioId = $portfolio->id;

        foreach($this->images as $img){
            $imageUpload = $img->store('files', 'public');
            PortfolioImage::create([
                'image' => $imageUpload,
                'caption_image' => 'some',
                'portfolio_id' => $portfolioId
            ]);
        }



        $this->items = Portfolio::all();
        //$this->resetExcept('category_id');
        session()->flash('message', 'Item Added success!');

    }

    function deleteImage($id)
    {
        PortfolioImage::find($id)->delete();
        session()->flash('message', 'image erase success!');

    }
}
