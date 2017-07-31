<?php
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('/api/callback/submit/test', 'SwiftDesign\Swift\api\ApiController@testAPI');


/* 
	SETUP OAUTH ACCESS TOKEN 

		- NOTE: THIS ROUTE NEEDS TO BE COMMENTED OUT 
		AFTER SETUP OR YOUR APPLICATION WILL HAVE A 
		SECURITY VULNERABILITY 
*/

// Route::get('/api/callback/oauth/setup', 'SwiftDesign\Swift\Api\ApiController@GetAccessTokenOauth');


