<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Article;
use App\Comment;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->get();
        return view('article.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        Article::create($request->all());
        Session::flash("Notice", "Article success created");
        return redirect()->route("article.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        $comments = $article->comments->sortByDesc('created_at');
        $entry = Comment::orderBy('created_at', 'DESC')->get();
        return view('article.show')->with('article', $article)->with('comments', $comments);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {   
        // dd ($request->all());
        Article::find($id)->update($request->all());//request untuk mendapatkan semua data yang telah diinput, update untuk mengupdate data
        
        Session::flash("Notice", "Article success updated");//pop up
        return redirect()->route('article.show', $id);//redirect dipake buat pas proses
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);//request untuk mendapatkan semua data yang telah diinput
        Session::flash("Notice", "Article success deleted");
        return redirect()->route('article.index');
    }
}
