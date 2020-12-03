<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsCategory;
use Alert;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        $type = $request->get('type');

        $type_options = array_keys( config('constants.news_types'));

        if ( !in_array($type, $type_options) ){
            $type = null;
        }

        $query = News::orderBy('start_date', 'desc');

        if ( $type ) {
            $query->whereType( $type );
        }

        $news = $query->paginate(20);


        return view('admin.news.index', compact('news', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->formView(new News());
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
        $this->validate($request,  $this->validationRules(), [], ['title:tc' => 'Title (TC)', 'title:en' => 'Title (EN)']);

        $news = new News($request->all());
        $news->is_publish = ($request->is_publish == 1);
        $news->is_feature = ($request->is_feature == 1);
        $news->thumbnail_path = $this->storeThumbnail($request);
        $news->image_path = $this->storeImage($request);
        $news->translateOrNew('tc')->introduction = strip_tags( $request->get('content:tc') );
        $news->translateOrNew('en')->introduction = strip_tags( $request->get('content:en') );
        $news->save();


        alert('News #'.$news->id.' Created');

        return redirect()->route('admin.news.index', $news);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return $this->formView($news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
        //
        $this->validate($request, $this->validationRules(), [], ['title:tc' => 'Title (TC)', 'title:en' => 'Title (EN)']);
        $news->fill($request->all());
        $news->is_feature = ($request->is_feature == 1);
        $news->is_publish = ($request->is_publish == 1);
        $news->translateOrNew('tc')->introduction = strip_tags( $request->get('content:tc') );
        $news->translateOrNew('en')->introduction = strip_tags( $request->get('content:en') );

        // Handle File Upload

        if ( $thumbnail_path = $this->storeThumbnail( $request ) ) {
            $news->thumbnail_path = $thumbnail_path;
        }

        if ( $image_path = $this->storeImage( $request ) ) {
            $news->image_path = $image_path;
        }

        $news->update();

        alert('News #'.$news->id.' Updated');

        return redirect()->route('admin.news.edit', $news);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
        $news->delete();

        alert('News Deleted');

        return redirect()->route('admin.news.index');
    }

    public function getListByType(Request $request, $type ) {

        $news = News::whereType($type)->orderBy('start_date', 'desc')->get()->map(function( $item ) {
            return [ 'id' => $item->id, 'name' => $item->{'title:en'} ];
        });

        return response()->json(['list' => $news], 200, []);

    }

    protected function formView(News $news){

        $categories = NewsCategory::orderBy('id', 'desc')->get();

        $categories_options = $categories->groupBy('type')->map(function( $categories ) {
            return $categories->pluck('name_en', 'id');
        })->toArray();

        return view('admin.news.form', compact('news', 'categories_options'));
    }

    protected function storeThumbnail(Request $request) {

        if ( $request->hasFile('thumbnail') ) {
            $file = $request->file('thumbnail');
            $filename = time().'_thumb.'.$file->extension();
            $path = $file->storeAs('news/thumbnails', $filename, 'public');
            return $path;
        } else {
            return null;
        }


    }

    protected function storeImage(Request $request) {

        if ( $request->hasFile('image') ) {
            $file = $request->file('image');
            $filename = time().'.'.$file->extension();
            $path = $file->storeAs('news/images', $filename, 'public');
            return $path;
        } else {
            return null;
        }

    }

    protected function validationRules( ) {

        return [
            'title:tc' => 'required',
            'title:en' => 'required',
            'content:tc' => 'required',
            'content:en' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
        ];

    }

}
