<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/********** start repos route ***********/
Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'repos'], function () {

        /**
         * @apiGroup           repos
         * @apiName            all/filter repos
         * @api                {get} /v1/filter 3-filter
         *
         * @apiVersion         1.0.0
         *
         * @apiUse             RepositoryResponse
         */
        Route::get('/', ['uses' => 'RepositoriesController@filter']);

    });
});
/********** end repos route ***********/
