<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /*public function index()
    {
        return view('articles/index');
    }*/
    public function index()
    {
        $data = Article::all();

        return view('articles.index', [
        'articles' => $data
        ]);
    }
 /*   {
        return "Controller - Article List";
    }*/


    public function detail($id)
    {
        return "Controller - Article Detail - $id";
    }
}

