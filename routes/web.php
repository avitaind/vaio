<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Language Switch
Route::get('/lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
], function(){

    Route::get('/', 'HomeController@index')->name('index');

    Auth::routes();

    Route::auth();
    Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
    Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

    Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');
    Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');


////    Route::get('/', 'HomeController@index')->name('index');
//    Route::get("/registration", 'HomeController@registration')->name('regis');
//    Route::get('/spec', function () {
//        return view(app()->getLocale().'.spec');
//    })->name('spec');


    Route::get('/about-us', 'PageController@getAboutUs')->name('about_us');
    Route::get('/contact-us', 'PageController@getContactUs')->name('contact_us');
    Route::get('/support', 'PageController@getSupport')->name('support');

    Route::get('/support/repair-tnc', 'PageController@getRepairTnc' )->name('support.repair_tnc');
    Route::get('/privacy', 'PageController@getPrivacy')->name('privacy');

    Route::get('/where-to-buy', 'PageController@getWhereToBuy')->name('where_to_buy');
	  


    Route::get('/news', 'NewsController@getNews')->name('news.news');
    Route::get('/news/{news}', 'NewsController@getNewsDetail')->name('news.news.detail');
    Route::get('/offers', 'NewsController@getOffers')->name('news.offers');
    Route::get('/offers/{news}', 'NewsController@getNewsDetail')->name('news.offers.detail');
    Route::get('/vaio-life', 'NewsController@getVAIOLifes')->name('news.life');
    Route::get('/vaio-life/feeds', 'NewsController@getVAIOLifeFeeds');
    Route::get('/vaio-life/{news}', 'NewsController@getNewsDetail')->name('news.life.detail');



    // Quality
    Route::get('/quality', 'PageController@getQuality')->name('quality');
    Route::get('/quality/azumino-finish', 'PageController@getQualityAzuminoFinish')->name('quality.azumino_finish');

    // Product
    Route::get('/product/s11-s13/overview', 'ProductController@getProductOverview')->name('product.overview');
    Route::get('/product/s11-s13/spec', 'ProductController@getProductSpecification')->name('product.spec');
	
    Route::get('/product/se14/overview', 'ProductController@getProductOverview14')->name('product.overview_se14');
    Route::get('/product/se14/spec', 'ProductController@getProductSpecification14')->name('product.spec_se14');
    Route::get('/product/se14/gallery', 'ProductController@getProductGallery14')->name('product.gallery_se14');
	
	Route::get('/product/sx14/overview', 'ProductController@getProductOverviewSx14')->name('product.overview_sx14');
    Route::get('/product/sx14/spec', 'ProductController@getProductSpecificationSx14')->name('product.spec_sx14');
    Route::get('/product/sx14/gallery', 'ProductController@getProductGallerySx14')->name('product.gallery_sx14');
	 
    Route::get('/product/a12/overview', 'ProductController@getProductOverview12')->name('product.overview_a12');
    Route::get('/product/a12/spec', 'ProductController@getProductSpecification12')->name('product.spec_a12');
    Route::get('/product/a12/gallery', 'ProductController@getProductGallery12')->name('product.gallery_a12');
	
	Route::get('/product/sx12/overview', 'ProductController@getProductOverviewSx12')->name('product.overview_sx12');
    Route::get('/product/sx12/spec', 'ProductController@getProductSpecificationSx12')->name('product.spec_sx12');
    Route::get('/product/sx12/gallery', 'ProductController@getProductGallerySx12')->name('product.gallery_sx12');
    
    Route::get('/product/fe14/overview', 'ProductController@getProductOverviewFe14')->name('product.overview_fe14');
    Route::get('/product/fe14/spec', 'ProductController@getProductSpecificationFe4')->name('product.spec_fe14');
    Route::get('/product/fe14/gallery', 'ProductController@getProductGalleryFe14')->name('product.gallery_fe14');
	
    // Drivers
    Route::get('/drivers', 'ProductDriverController@showDriverList');

    // Members
    Route::get('member', 'MemberController@getProfile')->name('member.profile');
    Route::post('member', 'MemberController@handleProfileUpdate');

    Route::get('member/change-password', 'MemberController@getChangePasswordForm')->name('member.change_password');
    Route::post('member/change-password', 'MemberController@handleChangePassword');

    Route::get('member/my-products', 'MemberController@getMyProductList')->name('member.my_products');

    Route::get('member/product-reg', 'MemberController@getProductRegistrationForm')->name('member.reg_product');
    Route::post('member/product-reg', 'MemberController@handleProductRegistration');
    Route::get('member/product-reg/complete', 'MemberController@showProductRegistrationComplete')->name('member.reg_product.complete');

    Route::get('select-support-region', 'PageController@getSupportRegions')->name('support.regions');

    // Data - API
    Route::get('data/shops', 'DataController@getShops')->name('api.shops');

    Route::get('data/faqs', 'DataController@getFAQs')->name('api.faqs');

    Route::get('data/lifes', 'DataController@getVAIOLifes');

});


Route::post("/form", "HomeController@form_handler")->name("form_submit");





/**
 *
 *  Kevin 2018-06-24
 *  To Update Admin's URL, go to routes/admin.php
 *
 */
