<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Tour;
use Livewire\Component;
use App\Models\Category;

class CategoryComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;

    public function mount($category_slug)
    {
        $this->sorting = "default";
        $this->pagesize = 9;
        $this->category_slug = $category_slug;
    }
    public function store($tour_id, $tour_name, $tour_price)
    {
        Cart::add($tour_id, $tour_name, 1, $tour_price)->associate('App\Models\Tour');
        session()->flash('message_succeed', 'succeed');
        return redirect()->route('tour.cart');
    }
    public function render()
    {
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        if ($this->sorting == 'date') {
            $tours = Tour::where('category_id', $category_id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price') {
            $tours = Tour::where('category_id', $category_id)->orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        } elseif ($this->sorting == 'price-desc') {
            $tours = Tour::where('category_id', $category_id)->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else {
            $tours = Tour::where('category_id', $category_id)->paginate($this->pagesize);
        }
        $categories = Category::all();
        $popular_tour = Tour::inRandomOrder()->limit(4)->get();
        $related_tour = Tour::where('category_id')->inRandomOrder()->limit(4)->get();
        return view('livewire.category-component', ['tours' => $tours, 'categories' => $categories, 'category_name' => $category_name, 'popular_tour' => $popular_tour, 'related_tour' => $related_tour])->layout('layouts.base');
    }
}
