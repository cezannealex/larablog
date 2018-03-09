<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.article.index', compact('articles'));
    }

    public function userArticle(){
        $articles = Auth::user()->articles()->orderBy('created_at', 'desc')->paginate(5);
        return view('admin.article.user_article', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = $request->image;
        // dd($request->image);

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/articles', $image_new_name);

        // dd($image_new_name);

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image_new_name,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id
        ]);

        return redirect()->route('admin.article.index');

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
        $article = Article::find($id);
        return view('admin.article.show', compact('article'));
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
        $article = Article::find($id);
        $categories = Category::all();
        return view('admin.article.edit', compact('article', 'categories'));
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
        $article = Article::find($id);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/articles/', $image_new_name);

            $article->image = $image_new_name;
        }

        $article->title = $request->title;
        $article->content = $request->content;
        $article->category_id = $request->category_id;

        $article->save();

        return redirect()->route('admin.article.index');
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
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('admin.article.index');
    }
}
