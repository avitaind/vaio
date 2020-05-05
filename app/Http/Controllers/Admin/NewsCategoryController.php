<?php

namespace App\Http\Controllers\Admin;

use App\NewsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = NewsCategory::all();

        return view('admin.news_categories.index', compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news_categories.form')->with('category', new NewsCategory());
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
        //

        $this->validate($request, [
            'name_en' => 'required',
            'name_tc' => 'required',
        ]);

        $category = new NewsCategory($request->all());
        $category->type = 'life';
        $category->save();

        alert('News Category created');

        return redirect()->route('admin.news_categories.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function show(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsCategory $newsCategory)
    {
        return view('admin.news_categories.form')->with('category', $newsCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsCategory $newsCategory)
    {
        //

        $this->validate($request, [
            'name_en' => 'required',
            'name_tc' => 'required',
        ]);

        $newsCategory->update( $request->all( ));
        alert('News Category updated');

        return redirect()->route('admin.news_categories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsCategory $newsCategory)
    {
        //

        //
        $newsCategory->delete();

        alert('News Category Deleted');

        return redirect()->route('admin.news_categories.index');

    }
}
