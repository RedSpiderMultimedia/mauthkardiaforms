<?php

namespace App\Http\Livewire\Admin\Articles;

use App\Models\Article;
use Livewire\Component;

class ShowArticles extends Component
{

    public function mount(){
        $this->articles = Article::all();
    }

    public function destroy($id){

        //dd('test');
        $article = Article::where('id', $id);
        $article->delete();
        $this->mount();
    }

    public function render()
    {
        return view('livewire.admin.articles.show-articles');
    }
}
