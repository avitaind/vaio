<?php

namespace App\Http\Controllers\Admin;

use App\FAQ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FAQsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::orderBy('category')->orderBy('question_no')->paginate(15);

        return view('admin.faqs.list', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->formView( new Faq( ));
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
            'question:tc' => 'required|string|max:1000',
            'question:en' => 'required|string|max:1000',
            'answer:tc'   => 'required',
            'answer:en'   => 'required',
            'question_no' => 'required|numeric|min:1',
        ]);


        $faq = Faq::create($request->all());

        alert('FAQ #'. $faq->id.' created');

        return redirect()->route('admin.faqs.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        //
        return $this->formView($faq);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        //
        $this->validate($request, [
            'question:tc' => 'required|string|max:1000',
            'question:en' => 'required|string|max:1000',
            'answer:tc'   => 'required',
            'answer:en'   => 'required',
            'question_no' => 'required|numeric|min:1',
        ]);

        $faq->update($request->all());

        alert('FAQ #'. $faq->id.' updated');

        return redirect()->route('admin.faqs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        //
        $faq->delete();

        alert('FAQ Deleted');

        return redirect()->route('admin.faqs.index');

    }


    protected function formView( Faq $faq ) {

//        $products = Product::all()->mapWithKeys(function ($item) {
//            return [ $item->id => $item->name_tc ];
//        });

        $categories = collect(config('data.faq_categories'))->map(function ($c) {
            return $c['title_en'];
        })->toArray();

        return view('admin.faqs.form', compact('faq', 'categories'));
    }

}
