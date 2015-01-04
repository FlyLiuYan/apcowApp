<?php
/**
 * tutorial for authentication
 */
Route::group(array('before'=>'guest'),function(){
	Route::get('/', array('as'=>'home','uses'=>'HomeController@showWelcome'));
});
Route::group(array('namespace'=>'Authentication'),function(){
	/**
	 * csrf protection
	 */
	Route::group(array('before'=>'csrf'),function(){		
		Route::post('/account/signin', array('as'=>'account_signin','uses'=>'AuthController@postSignIn'));
		Route::post('/account/create', array('as'=>'account_create','uses'=>'AuthController@postAccount'));
	});
	Route::get('/account/signin', array('as'=>'show_account_signin','uses'=>'AuthController@getSignIn'));
	Route::get('/account/create', array('as'=>'show_account_create','uses'=>'AuthController@getAccount'));
});

/**
 * Since HTML forms only support POST and GET, 
 * PUT and DELETE methods will be spoofed by automatically 
 * adding a _method hidden field to your form.
 */
/** resource controller example**/
Route::group(array('prefix' => 'api/v1'),function(){
	Route::Resource("user","Api\UserController");
	Route::Resource("user.question","Api\UserQuestionController");
        Route::Resource("article","Api\ArticleController");
});
Route::group(array("prefix"=>"api/v1"),function(){
    Route::get("/list/{page}","Api\ListController@getListByPage")->where('page', '\d+');
});

