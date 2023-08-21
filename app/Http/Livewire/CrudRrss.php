<?php

namespace App\Http\Livewire;

use App\Models\SocialMedia;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CrudRrss extends Component
{
    public $socialMedias = [];
    public $icon = '';
    public $name = '';
    public $url = '';
    public $idSocialMedia = '';
    public $isEdit = false;

    public function mount(){

        $this->socialMedias = SocialMedia::where('user_id', auth()->user()->id)->get();

    }

    public function delete($id){
        SocialMedia::find($id)->delete();
        $this->socialMedias = SocialMedia::where('user_id', auth()->user()->id)->get();
        session()->flash('message', 'rrss erase success!');
    }

    function edit($id)
    {

        $rrss = SocialMedia::find($id);

        $this->name = $rrss->name;
        $this->icon = $rrss->icon;
        $this->url = $rrss->url;
        $this->idSocialMedia = $id;

        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'icon' => 'required',
            'url' => 'required'
        ]);

        $rrss = SocialMedia::find($this->idSocialMedia)->update([
            'name' => $this->name,
            'icon' => $this->icon,
            'url' => $this->url
        ]);


        $this->socialMedias = SocialMedia::where('user_id', auth()->user()->id)->get();
        $this->icon = '';
        $this->name = '';
        $this->url = '';
        $this->id = '';
        $this->isEdit = false;

        session()->flash('message', 'Portfolio Item Edit Success!');


    }

    public function save(){
        $this->validate([
            'name' => 'required',
            'icon' => 'required',
            'url' => 'required'
        ]);

        SocialMedia::create([
            'user_id' => auth()->user()->id,
            'name' => $this->name,
            'icon' => $this->icon,
            'url' => $this->url
        ]);

        $this->socialMedias = SocialMedia::where('user_id', auth()->user()->id)->get();
        $this->icon = '';
        $this->name = '';
        $this->url = '';

        session()->flash('message', 'RRSS Added success!');
    }


    public function render():View
    {
        return view('livewire.crud-rrss');
    }
}
