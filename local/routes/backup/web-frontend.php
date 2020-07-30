<?php

#=======================================================================================================================================================
// Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z-]{2,5}'], 'middleware' => 'setlocale', 'namespace' => 'Frontend'], function() {
#=======================================================================================================================================================

  // Authentication Routes...
  Route::get('signin', 'Auth\LoginController@showLoginForm')->name('login');
  Route::post('signin', 'Auth\LoginController@login')->name('login');
  Route::get('logout', 'Auth\LoginController@logout')->name('logout');

  #=======================================================================================================================================================

  # Homepage
  Route::get('/', 'Frontend\HomepageController@index')->name('index'); 
  Route::get('index', 'Frontend\HomepageController@index')->name('index'); 

  Route::get('search', 'Frontend\SearchController@index')->name('index');


	Route::get('safety', 'Frontend\Safety\HomepageController@index')->name('safety');
	Route::get('safety-slogan', 'Frontend\Safety\SloganController@index')->name('safety.slogan');
	Route::get('safety-basic-approach', 'Frontend\Safety\BasicApproachController@index')->name('safety.basic-approach');
	Route::get('safety-direction', 'Frontend\Safety\DirectionController@index')->name('safety.direction');
	// Route::get('safety-asean-ncap', 'Frontend\Safety\NCAPController@index')->name('safety.arsean-ncap');
	Route::get('safety-asean-ncap', 'Frontend\Safety\AseanNCAPController@index')->name('safety.asean.ncap');
	Route::get('safety-ncap', 'Frontend\Safety\NCAPController@index')->name('safety.ncap');


  

  Route::get('environment', 'Frontend\Environment\HomepageController@index');
  Route::get('environment-direction', 'Frontend\Environment\DirectionController@index');
  Route::get('environment-statementandvision', 'Frontend\Environment\StatementandvisionController@index');
  Route::get('environment-tripple-zero', 'Frontend\Environment\TrippleController@index');
  Route::get('environment-slogan', 'Frontend\Environment\SloganController@index');
  Route::get('environment-impact', 'Frontend\Environment\ImpacteController@index');
  Route::get('environment-business-activities', 'Frontend\Environment\BusinessController@index');



  Route::get('csr', 'Frontend\Csr\HomepageController@index');
  Route::get('csr-news', 'Frontend\Csr\NewsController@index');
  Route::get('csr-social-activities', 'Frontend\Csr\SocialActivitiesController@index');
  Route::get('csr-basic-approach', 'Frontend\Csr\BasicApproachController@index');
  Route::get('csr-basic-principles', 'Frontend\Csr\BasicPrinciplesController@index');

  Route::get('news', 'Frontend\NewsController@index');
  Route::get('newtwork', 'Frontend\NetworkController@index');
  Route::get('message-from-president', 'Frontend\MsgPresidentController@index');
  Route::get('honda-sustainability', 'Frontend\HondaSustainabilityController@index');
  Route::get('news-detail/{id}', 'Frontend\NewsDetailController@index');

  #=====================================================================================================================================================
  Route::group(['middleware' => ['auth:user']], function () {
  #=====================================================================================================================================================

    #=======================================================================================================================================================
    Route::group(['prefix' => 'member','namespace' => 'Member',  'as' => 'member.'], function() {
    #=======================================================================================================================================================
      Route::get('', 'MyprofilesController@index')->name('index');
      
    #=======================================================================================================================================================
    }); //route group member
  #=====================================================================================================================================================
  }); //route group auth:user
#=======================================================================================================================================================
// }); //route group setlocale



