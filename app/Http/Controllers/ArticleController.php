<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\ArticleCategory;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    /**
     * ArticleController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('log')->only('index');
//        $this->middleware('subscribed')->except('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->get();
//        dd($diaries[0]->user->avatar);
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ArticleCategory::all();
        return view('article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\EditArticleRequest $request)
    {
        $data = [
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ];
        $article = Article::create(array_merge($request->all(), $data));
        //        dd(array_merge($request->except('_token'), $data));
        return redirect()->action('ArticleController@show', ['article'=>$article]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
//        $article = Article::findOrFail($id);
        if(Auth::user()->id != $article->created_by) {
            return redirect('/');
        }
        $categories = ArticleCategory::all();
        return view('article.edit', ['article'=>$article, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\EditArticleRequest $request, Article $article)
    {
        $data = [
            'created_by' => $article->created_by,
            'updated_by' => Auth::user()->id,
        ];
//        dd(array_merge($request->all(), $data));

        $article->update(array_merge($request->all(), $data));
        return redirect()->action('ArticleController@show', ['article'=>$article]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
