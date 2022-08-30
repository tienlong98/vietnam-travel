<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Tour;
use Livewire\Component;
use App\Models\Category;

class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;
    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 9;
    }
    public function store($tour_id, $tour_name, $tour_price)
    {
        Cart::add($tour_id, $tour_name, 1, $tour_price)->associate('App\Models\Tour');
        session()->flash('message_succeed', 'succeed');
        return redirect()->route('tour.cart');
    }
    public function render()
    {
        if ($this->sorting == 'date') {
            $tours = Tour::orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price') {
            $tours = Tour::orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'featured') {
            $tours = Tour::orderBy('featured')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price-desc') {
            $tours = Tour::orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else {
            $tours = Tour::paginate($this->pagesize);
        }
        $categories = Category::all();
        $popular_tour = Tour::inRandomOrder()->limit(4)->get();
        $related_tour = Tour::where('category_id')->inRandomOrder()->limit(4)->get();
        return view('livewire.shop-component', ['tours' => $tours, 'categories' => $categories, 'popular_tour' => $popular_tour, 'related_tour' => $related_tour])->layout('layouts.base');
    }
}
