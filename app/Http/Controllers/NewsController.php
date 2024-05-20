<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();

        return view('news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new News;

        $news->news_heading = $request->news_head;

        $news->news_body = $request->news_body;

        $news->save();

        return redirect(route('news.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function allNews(){
        $news = News::orderby('created_at','desc')->get();
        return view('news.frontend.all',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($new_id)
    {
        $new = News::find($new_id);
        return view('news.edit',compact('new'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$new_id)
    {
        $new = News::find($new_id);

        $new->news_heading = $request->news_head;

        $new->news_body = $request->news_body;

        $new->update();

        return redirect(route('news.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $new=News::findOrFail($request->new_delete_id);

        $new->delete();

        return redirect(route('news.index'));
    }
}
