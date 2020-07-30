<?php

Route::get('index', function () {
    return redirect('index');
});

Route::get('home', function () {
    return redirect('index');
});

Route::get('b', function () {
    return redirect('backend/login');
});

Route::get('backend/index', function () {
    return redirect('backend/header-banner');
});

/*
|--------------------------------------------------------------------------------------------------------------------------
| Web frontend
|--------------------------------------------------------------------------------------------------------------------------
*/
require_once('web-frontend.php');

/*
|--------------------------------------------------------------------------------------------------------------------------
| Web backend
|--------------------------------------------------------------------------------------------------------------------------
*/
require_once('web-backend.php');

require_once('web-backend-tee.php');
require_once('web-backend-dee.php');
require_once('web-backend-pete.php');
require_once('web-backend-beem.php');

Route::resource('customsearch', 'CustomSearchController');

Route::get('lang/{lang}', 'LocaleController@lang');

Route::post('saveEmailSubscribe', 'AjaxController@saveEmailSubscribe');

