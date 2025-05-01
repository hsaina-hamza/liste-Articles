<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\articles;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class ArticleController extends Controller
{
    //
    public function index(){
        $articale = articles::all();
        return view('articleDetal',compact("articale"));
    }
    public function show($id){
        $articale = articles::find($id);
        return view('article',compact("articale"));
        // return view('articleDetal',[
        //     'article'=>$articale,
        // ]);
    }
    public function create(){
        return view('AjuoterArticle');
    }
    public function store(Request $request){
        $validated = $request->validate([
            "Content"=>'required|string',
            "titre"=>'required|string',
            "date"=>'required|date',
        ]);
        articles::create($validated);
        return redirect()->route('store');

    }

}
