<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{  
        public function show($id)
    {
        $article = Article ::find($id);
        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {
        // モデル名::テーブル全件取得
        $articles = Article::all();
        // Articlesティレクトリーの中のindexページを指定し、itemsの連想配列を代入
        return view('articles.index', ['articles' => $articles]);
    }
}
