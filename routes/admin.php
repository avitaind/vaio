<?php

/*************************************************************************************
 *
 *  ALL Controller in this page, are using \App\Http\Controllers\Admin namespace.
 *
 *************************************************************************************
 */


//->prefix('admin')
//    ->name('admin.')


Route::name('admin.')->prefix('admin')->group( function() {


// Auth Routes
    Route::get('login', "LoginController@showLoginForm")->name('login');
    Route::post("login", "LoginController@login");
    Route::get("logout", "LoginController@logout")->name('logout');


    Route::group(['middleware' => 'auth:admin'], function() {

        Route::get('/', 'HomeController@index')->name("dashboard");

        Route::get('/profile', 'HomeController@getProfile')->name('profile');
        Route::post('/profile', 'HomeController@handleProfileForm');


        // News

        Route::get('news/list/{type}', 'NewsController@getListByType');

        Route::resource('news', 'NewsController');
        Route::resource('news_categories', 'NewsCategoryController');
        Route::resource('warranties', 'WarrantyTermsController')->except(['create', 'store']);

        Route::resources([
            'shops'           => 'ShopsController',
            'faqs'            => 'FAQsController',
            'service_centers' => 'ServiceCentersController',
            'users'           => 'AccountsController',
            'banners' => 'BannersController',
        ]);

        // Customer Section
        Route::get('customers/export', 'CustomersController@export')->name('customers.export');
        Route::resource('customers', 'CustomersController');

        Route::post('file_uploads', 'FileUploadController@uploadImage')->name('image_upload');

        Route::get('questionnaire', 'FormDataController@showQuestionnaireResults');
        Route::get('questionnaire/export', 'FormDataController@downloadExcel')->name('questionnaire.excel');

        Route::get('survey-data', 'FormDataController@showSurveyResults');
        Route::get('survey-data/export', 'FormDataController@downloadSurveyExcel')->name('survey.excel');

    });

});



