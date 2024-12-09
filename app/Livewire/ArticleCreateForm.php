<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ArticleCreateForm extends Component
{
    #[Validate('required|min:5')]
    public $title;

    #[Validate('required')]
    public $subtitle;

    public function store()
    {
        //1)validare i dati
        $this->validate();
        //2)Salvare i dati
        $article =  Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
        ]);

        session()->flash('success', 'Articolo creato con successo');
        //return redirect()->with('success', 'Articolo creato con successo');
        //3)resettare il form 
        $this->title = '';
        $this->subtitle = '';
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
