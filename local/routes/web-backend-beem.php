<?php
#===========================================================================================================================================================
Route::group(['prefix' => 'backend', 'namespace' => 'Backend', 'as' => 'backend.'], function () {
#===========================================================================================================================================================

  #=========================================================================================================================================================
  Route::group(['middleware' => ['auth:admin']], function () {
    #=========================================================================================================================================================


    //1  Environment/Business-Activities/
    Route::resource('environment/business-activities/product', 'Environment\BusinessActivities\ProductController');
    Route::post('environment/business-activities/product/datatable', 'Environment\BusinessActivities\ProductController@Datatable')->name('product.datatable');

    //2  Safety/Home/Banner-Video
    Route::resource('safety/home/banner-video', 'Safety\Home\BannerVideoController');
    Route::post('safety/home/banner-video/datatable', 'Safety\Home\BannerVideoController@Datatable')->name('banner-video.datatable');

    //3  Safety/Home/Honda-Test-Result-Topic
    Route::resource('safety/home/honda-test-result-topic', 'Safety\Home\HondaTestController');
    Route::post('safety/home/honda-test-result-topic/datatable', 'Safety\Home\HondaTestController@Datatable')->name('honda-test-result-topic.datatable');

    //4  Safety/Slogan
    Route::resource('safety/slogan', 'Safety\SloganController');
    Route::post('safety/slogan/datatable', 'Safety\SloganController@Datatable')->name('slogan.datatable');

    //5  Safety/Basic-Approach/Banner
    Route::resource('basic-approach/banner', 'Safety\BasicApproach\BannerController');
    Route::post('basic-approach/banner/datatable', 'Safety\BasicApproach\BannerController@Datatable')->name('banner.datatable');

    //6  Safety/Basic-Approach/Inside-Detail
    Route::resource('basic-approach/inside-details', 'Safety\BasicApproach\InsideDetailController');
    Route::post('basic-approach/inside-details/datatable', 'Safety\BasicApproach\InsideDetailController@Datatable')->name('inside-details.datatable');

    //7  Safety/Direction/Banner
    Route::resource('direction/banner-direction', 'Safety\Direction\BannerController');
    Route::post('direction/banner-direction/datatable', 'Safety\Direction\BannerController@Datatable')->name('banner.datatable');

    //8  Safety/Direction/Direction-Of-Activities
    Route::resource('direction/direction-activities', 'Safety\Direction\ActivitiesController');
    Route::post('direction/direction-activities/datatable', 'Safety\Direction\ActivitiesController@Datatable')->name('direction-activities.datatable');

    //9  Safety/ASEAN-NCAP/Security-Topic-Of-ASEAN-NCAP
    Route::resource('ASEAN-NCAP/security-topics', 'Safety\ASEANNCAP\SecurityTopicController');
    Route::post('ASEAN-NCAP/security-topics/datatable', 'Safety\ASEANNCAP\SecurityTopicController@Datatable')->name('security-topics.datatable');

    #=========================================================================================================================================================
  }); //route group auth:admin
#===========================================================================================================================================================
}); //route group backend
