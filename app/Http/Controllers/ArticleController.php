<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\ArticleRequest;

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
    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        // インスタンスの作成
        $article = new Article;

        // 値の用意
        $article->title = $request->title;
        $article->body = $request->body;


        // インスタンスに値を設定して保存
        $article->save();

        // 登録したらindexに戻る
        return redirect('/articles');
    }   

        public function edit($id) 
    {
        $article = Article::find($id);
        return view('articles.edit', ['article' => $article]);
    }

    public function update(ArticleRequest $request, $id) 
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $article = Article::find($id);
        // articleの用意
        $article->title = $request->title;
        $article->body = $request->body;
        // 保存
        $article->save();
        // 登録したらindexに戻る
        return redirect('/articles');
    }

        public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
