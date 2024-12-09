<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index');
    }
    public function create()
    {
        return view('article.create');
    }

    public function edit(Article $article)
    {
        $articolo_preso_con_injection = $article;
        return view('article.edit', compact('articolo_preso_con_injection'));
    }

    public function store(Request $request)
    {

        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);
        return to_route('articles.index')->with('success', 'Articolo Creato');
    }

    public function update(Request $request, Article $article)
    {

        $article->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);
        return to_route('articles.index')->with('success', 'Articolo Modificato');
    }

    public function destroy(Article $article)
    {

        $article->delete();
        return to_route('articles.index')->with('success', 'Articolo cancellato');
    }
}
