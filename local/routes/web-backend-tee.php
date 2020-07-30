<?php
#===========================================================================================================================================================
Route::group(['prefix' => 'backend','namespace' => 'Backend',  'as' => 'backend.'], function() {
#===========================================================================================================================================================

  #=========================================================================================================================================================
  Route::group(['middleware' => ['auth:admin']], function () {
  #=========================================================================================================================================================

    Route::resource('insideinformation', 'InsideInformationController');
    Route::post('insideinformation/datatable', 'InsideInformationController@Datatable')->name('insideinformation.datatable');

    Route::resource('insideinformationncap', 'InsideInformationNcapController');
    Route::post('insideinformationncap/datatable', 'InsideInformationNcapController@Datatable')->name('insideinformationncap.datatable');


    Route::resource('network', 'NetworkController');
    Route::post('network/datatable', 'NetworkController@Datatable')->name('network.datatable');
    Route::get('network/datatable', 'NetworkController@Datatable')->name('network.datatable');

    Route::resource('network_table', 'NetworkTableController');
    Route::post('network_table/datatable', 'NetworkTableController@Datatable')->name('network_table.datatable');

    Route::resource('subscribe', 'SubscribeController');
    Route::post('subscribe/datatable', 'SubscribeController@Datatable')->name('subscribe.datatable');

    Route::resource('googleId', 'GoogleIdController');
    Route::post('googleId/datatable', 'GoogleIdController@Datatable')->name('googleId.datatable');


    Route::resource('securityncap', 'SecurityNcapController');
    Route::post('securityncap/datatable', 'SecurityNcapController@Datatable')->name('securityncap.datatable');


  #=========================================================================================================================================================
  }); //route group auth:admin
#===========================================================================================================================================================
}); //route group backend
