<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Article;

class ApiArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = Article::create([
            'title'     =>  $request->get('title'),
            'description'=>  $request->get('description'),
            'content'   =>  $request->get('content'),
            'category_id'  =>  $request->get('category'),
            'created_by'=>  $request->get('userid'),
            'updated_by'=>  $request->get('userid'),
        ]);
        return $article;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function articleList($page, $category) {
        $limit = 20;
        $from = ($page -1) * $limit;
        $articles = Article::latest()
            ->where('category_id', $category)
            ->skip($from)
            ->take($limit)->get();
        foreach($articles as $article) {
            $article['comments'] = (string)count(Comment::where('article_id', $article->id)->get());
        }
        return $articles;
    }

    public function releaseComment(Request $request) {
        $comment = Comment::create([
            'article_id'=> $request->get('article_id'),
            'content'   =>  $request->get('content'),
            'created_by'=>  $request->get('userid'),
            'updated_by'=>  $request->get('userid'),
        ]);
        return ['comment'=>$comment];
    }

    public function deleteComment($id) {
        return Comment::findorFail($id)->delete() ? 'deleted' : 'failed';
    }



}
