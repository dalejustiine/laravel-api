<?php

use Illuminate\Http\Request;

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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api) {
    $api->group(['middleware' => ['api.auth']], function($api) {
        $api->get('/students', 'App\Http\Controllers\StudentController@getAllStudents');
        $api->get('/students/{student_number}', 'App\Http\Controllers\StudentController@getStudent');

        $api->get('/cys', 'App\Http\Controllers\StudentController@getAllCy');
        $api->get('/cys/{student_number}', 'App\Http\Controllers\StudentController@getCy');

        $api->get('/preferences', 'App\Http\Controllers\StudentController@getAllPreferences');
        $api->get('/preferences/{student_number}', 'App\Http\Controllers\StudentController@getPreference');

        $api->get('/schedules/{student_number}/{preference_id}', 'App\Http\Controllers\StudentController@getSchedules');
        $api->get('/grades/{student_number}/{preference_id}', 'App\Http\Controllers\StudentController@getGrades');
    });

    $api->post('/authenticate', 'App\Http\Controllers\AuthenticateController@authenticate');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('authenticate', 'AuthenticateController@authenticate');
