<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\articles;
use Illuminate\Http\Request;

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
    public function store(Request $request){


    }

}
