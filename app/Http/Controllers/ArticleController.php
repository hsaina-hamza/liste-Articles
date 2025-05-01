<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index(){
        $articale = articles::all();
        return view('articleDetal',compact("articale"));
    }

    public function show($id){
        $articale = articles::find($id);
        return view('article',compact("articale"));
    }

    public function create(){
        return view('AjuoterArticle');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'content' => 'required|string',
            'titre' => 'required|string',
            'date' => 'required|date',
        ]);

        $validated['user_id'] = Auth::id();

        articles::create($validated);
        return redirect()->route('articles.index')->with('success', 'Article ajouté avec succès');
    }

    public function edit($id){
        $article = articles::findOrFail($id);
        return view('edit', compact('article'));
    }

    public function update(Request $request, $id){
        $article = articles::findOrFail($id);
        
        $validated = $request->validate([
            'content' => 'required|string',
            'titre' => 'required|string',
            'date' => 'required|date',
        ]);

        $article->update($validated);
        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès');
    }

    public function destroy($id){
        $article = articles::findOrFail($id);
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès');
    }
}
