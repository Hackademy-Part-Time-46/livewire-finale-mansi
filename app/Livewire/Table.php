<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Table extends Component
{

    public function delete(Article $article)
    {
        $article->delete();
        session()->flash('success', 'Articolo cancellato con successo');
    }

    public function render()
    {
        return view('livewire.table', ['articles' => Article::all()]);
    }
}
