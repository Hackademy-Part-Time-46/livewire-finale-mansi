<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ArticleEditForm extends Component
{
    public Article $article;

    #[Validate('required|min:5')]
    public $title;

    #[Validate('required')]
    public $subtitle;

    public function mount()
    {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
    }

    public function update()
    {

        $this->validate();

        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
        ]);
        session()->flash('success', 'Articolo modificato con successo');
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
