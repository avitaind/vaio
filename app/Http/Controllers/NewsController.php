<?php

namespace App\Http\Controllers;

use App\Banner;
use App\News;
use App\NewsCategory;
use App\Article;
use Illuminate\Http\Request;


class NewsController extends Controller
{

    public function getNews( ) {

        $news = News::news()->paginate();
       // $article = Article::news()->paginate();
        $article = Article::latest()->orderBy('id', 'asc')->get();

        $feature_news = News::news()->published()->orderBy('start_date', 'desc')->limit('4')->get();
       // $feature_article = Article::article()->published()->orderBy('start_date', 'desc')->limit('4')->get();

        return view('news.news_list', compact('news', 'feature_news','article'));
    }

    public function getOffers( ) {

        $offers = News::offers()->published()->orderBy('start_date', 'desc')->get();

        $banners = Banner::where('type', 'offer')->orderBy('seq', 'asc')->get();

        return view('news.offer_list', compact('offers', 'banners'));
    }

    public function getVAIOLifes( ) {

        $categories = NewsCategory::whereType('life')->get();

        return view('news.life_list', compact('categories'));
    }

    public function getVAIOLifeFeeds(Request $request) {

        $type = $request->get('feed_type');

        $lifes = News::lifes()->published();

        if ( $type > 0 ) {
            $lifes->where('category_id', $type );
        }

        $lifes = $lifes->orderBy('start_date', 'desc')->get();

        return view('news.life_feed', compact('lifes'));

    }

    public function getNewsDetail(Request $request, News $news) {

        if ( !$news->is_publish ) {
            abort(404);
        }

        $parent_page = [];

        if ( $news->type == 'news' ) {

            $parent_page = [
                'text' => __('common.latest_news'),
                'url' => route('news.news')
            ];

        } else if ( $news->type == 'life') {

            $parent_page = [
                'text' => __('common.latest_vaio_life'),
                'url' => route('news.life')
            ];

        } else if ( $news->type == 'offer' ) {

            $parent_page = [

                'text' => __('common.latest_offer'),
                'url' => route('news.offers')
            ];

        }       
        
        //return view('news.details', compact('breadcrumbs', 'news', 'parent_page'));
        return view('news.details', compact('news', 'parent_page'));

    }


}
