<?php


Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});
Route::get('/test', function(){
    return 1;
});
Route::post('/login', 'Auth\LoginController@loginApi');
Route::post('/register', 'Auth\RegisterController@registerApi');

Route::group([
    'middleware' => ['auth:api', 'role:trainer' ]
],
    function () { 
        
        Route::post('/addClient', 'Trainer\DashboardController@addClient');
        Route::get('/allClients', 'Trainer\DashboardController@index');

        //Excersice
        Route::post('/storeExercise', 'Trainer\ExerciseController@store');
        Route::get('/allExercise', 'Trainer\ExerciseController@index');
        Route::get('/editExercise/{id}', 'Trainer\ExerciseController@edit');
        Route::post('/updatedExcercise', 'Trainer\ExerciseController@update');
        //WorkoutTemplate
        Route::post('/storeWorkoutTemplate', 'Trainer\WorkoutController@storeWorkoutTemplate');
        Route::get('/allWorkoutTemplate', 'Trainer\WorkoutController@allWorkoutTemplate');
       //Workout
       Route::get('/workout/{id}', 'Trainer\WorkoutController@allWorkout');


       //Meals
        Route::post('/storeMeal', 'Trainer\MealController@store');
        
        Route::get('/editMeal/{id}', 'Trainer\MealController@edit');
        Route::post('/updateMeal', 'Trainer\MealController@update');



    });
    Route::get('/allMeal', 'Trainer\MealController@index');