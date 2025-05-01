<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articale = articles::all();
        return view('articleDetal', compact("articale"));
    }

    public function create()
    {
        return view('AjuoterArticle');
    }

    public function store(Request $request)
    {
        $article = new articles();
        $article->contenu = $request->content;
        $article->titre = $request->titre;
        $article->date = $request->date;
        $article->save();

        return redirect('/articles');
    }

    public function edit($id)
    {
        $article = articles::find($id);
        return view('edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = articles::find($id);
        $article->contenu = $request->content;
        $article->titre = $request->titre;
        $article->date = $request->date;
        $article->save();

        return redirect('/articles');
    }

    public function destroy($id)
    {
        $article = articles::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
