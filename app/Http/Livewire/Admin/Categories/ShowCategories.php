<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;

class ShowCategories extends Component
{


    public function render()
    {
        return view('livewire.admin.categories.show-categories', [
            'categories' => Category::all(),
        ]);
    }
}
