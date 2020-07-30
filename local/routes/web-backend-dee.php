<?php
#===========================================================================================================================================================
Route::group(['prefix' => 'backend','namespace' => 'Backend',  'as' => 'backend.'], function() {
#===========================================================================================================================================================

  #=========================================================================================================================================================
  Route::group(['middleware' => ['auth:admin']], function () {
  #=========================================================================================================================================================
  Route::get('header-banner', 'BannerController@banner');
  Route::get('header-banner-2', 'BannerController@banner');
  Route::get('edit-cont-home', 'BannerController@cont');
  Route::put('update_content', 'BannerController@UpdateContent');
  Route::get('banner_image', 'BannerController@BannerImage');
  Route::get('form-banner', 'BannerController@FormBanner');
  Route::post('add_banner', 'BannerController@AddBanner');
  Route::get('delete_img_banner/{id}', 'BannerController@DeleteImgBanner');
  Route::get('edit_img_banner/{banner_id}', 'BannerController@EditImgBanner');
  Route::post('update_banner', 'BannerController@UpdateImgBanner');


  Route::get('news-update-3', 'NewsController@NewsTable');
  Route::get('add_news', 'NewsController@AddNews');
  Route::post('save_news', 'NewsController@SaveNews');
  Route::get('delete_news/{id}', 'NewsController@DeleteNews');
  Route::get('news_gallery/{id}', 'NewsController@NewsGallery');
  Route::get('add_img_gallery/{id}', 'NewsController@AddGallery');
  Route::post('save_gallery', 'NewsController@SaveGallery');
  Route::get('delete_img_gal/{id}', 'NewsController@DeleteGallery');
  Route::get('edit_img_gal/{id}', 'NewsController@EditImgGal');
  Route::post('update_gallery', 'NewsController@UpdateImgGal');
  Route::get('edit_news/{id}', 'NewsController@EditNews');
  Route::post('update_news', 'NewsController@UpdateNews');


  Route::get('our-history-5', 'HistoryController@OurHistory');
  Route::get('edit_history', 'HistoryController@FormHistory');
  Route::post('update_history', 'HistoryController@UpdateHistory');

  Route::get('sustainability-part-1-7', 'SustainController@SustainTable');
  Route::get('edit_sus1', 'SustainController@EditSustain');
  Route::post('update_sus1', 'SustainController@UpdateSustain1');

  Route::get('sustainability-part-2-8', 'SustainController@SustainTable2');
  Route::get('edit_sus2/{id}', 'SustainController@EditSustain2');
  Route::post('update_sus2', 'SustainController@UpdateSustain2');

  Route::get('banner-video-11', 'EnvironmentController@VDOTable');
  Route::get('edit_vdo', 'EnvironmentController@EditVDO');
  Route::post('update_vdo', 'EnvironmentController@UpdateVDO');
  
  Route::get('news-menu-12', 'EnvironmentController@NewsMenuTable');
  Route::get('edit_news_menu/{id}', 'EnvironmentController@EditNewsMenu');
  Route::post('update_news_menu', 'EnvironmentController@UpdateNewsMenu');

  
  Route::get('direction-13', 'DirectionController@DirecTable');
  Route::get('edit_direc', 'DirectionController@EditDirec');
  Route::post('update_direc', 'DirectionController@UpdateDirec');

  Route::get('banner-15', 'StateController@StateTable');
  Route::get('edit_state_banner', 'StateController@EditState');
  Route::post('update_state_banner', 'StateController@UpdateBanner');

  Route::resource('csr_home', 'Csr_homeController');
    Route::get('delete_csr_home/{id}', 'Csr_homeController@Deletehome');
  Route::post('csr_home/datatable', 'Csr_homeController@Datatable')->name('csr_home.datatable');

  Route::get('honda-social-activities-49', 'Csr2Controller@CsTable');
  Route::get('edit_csr', 'Csr2Controller@EditCsr');
  Route::post('update_sc', 'Csr2Controller@UpdateSc');

    // Route::resource('nisit', 'NisitController');
    // Route::post('nisit/datatable', 'NisitController@Datatable')->name('nisit.datatable');


  #=========================================================================================================================================================
  }); //route group auth:admin
#===========================================================================================================================================================
}); //route group backend
