<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PortfolioCategory;
use App\Models\Portfolio;


class CrudPortfolioCategory extends Component
{
    public $user;
    public $categories;
    public $categoryName;
    public $edit = false;
    protected $rules = [
        'categories.*.name' => 'required'
    ];


    public function mount(){

        $this->categories = PortfolioCategory::all();

        //TODO retrieve the number of portfolio items using the category
        //$this->categories = PortfolioCategory::withCount(Portfolio::all())->get();



    }

    public function render()
    {
        //$this->categories = PortfolioCategory::all();

        return view('livewire.crud-portfolio-category');
    }

    public function addCategory(){
        $this->validate([
            'categoryName' => 'required | unique:portfolio_categories,name',
        ]);

        PortfolioCategory::create([
            'name' => $this->categoryName,
        ]);

        $this->categoryName = '';

        $this->categories = PortfolioCategory::all();


        session()->flash('message', 'Category add successful!');
    }

    public function switchEdit(){
        if($this->edit === false)
            $this->edit = true;
        else
            $this->edit= false;
    }

    public function editCategory(){
;
        $this->validate();

        foreach ($this->categories as $category) {
            $category->save();
        }

        $this->categories = PortfolioCategory::all();
        $this->edit= false;

        session()->flash('message', 'Category edit successful!');

    }

    public function deleteCategory($id){

        $portfolio_items = Portfolio::where('category_id', $id )->get();

        //dd(count($portfolio_items));

        if(count($portfolio_items) > 0){
            $this->categories = PortfolioCategory::all();
            session()->flash('message', 'the category has items associated');
        } else {
            PortfolioCategory::find($id)->delete();
            $this->categories = PortfolioCategory::all();
            session()->flash('message', 'Category delete successful!');
        }



    }
}
