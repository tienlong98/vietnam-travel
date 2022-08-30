<?php

namespace App\Http\Livewire;

use App\Models\Tour;
use Livewire\Component;
use Cart;
use Illuminate\Http\Request;

class DetailTourComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    // $tour_date,
    public function store1(Request $request)
    {
        \Log::info([$request->all()]);
        Cart::add($tour_id, $tour_name,$tour_date, 1, $tour_price)->associate('App\Models\Tour');
        session()->flash('message_succeed', 'Succeed');

        return redirect()->route('tour.cart');
    }
    public function render()
    {
        $tour = Tour::where('slug', $this->slug)->first();
        $popular_tour = Tour::inRandomOrder()->limit(4)->get();
        $related_tour = Tour::where('category_id', $tour->category_id)->inRandomOrder()->limit(4)->get();
        return view('livewire.detail-tour-component', ['tour' => $tour, 'popular_tour' => $popular_tour, 'related_tour' => $related_tour],)->layout('layouts.base');
    }
}
