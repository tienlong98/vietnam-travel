<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AdminCategoryComponent extends Component
{
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message_succeed', 'Succeed');

    }
    public function render()
    {
        $categories = Category::paginate(6);
        return view('livewire.admin.admin-category-component', ['categories' => $categories])->layout('layouts.base');
    }
}
