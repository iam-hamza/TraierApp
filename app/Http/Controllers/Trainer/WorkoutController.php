<?php

namespace App\Http\Controllers\Trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutTemplate;
use Illuminate\Support\Facades\Validator;

class WorkoutController extends Controller
{
    Public function allWorkoutTemplate(){
      
        $workoutTemplate= WorkoutTemplate::get();
       
        return response()->json(['workoutTemplate'=>  $workoutTemplate]);
    }

    /**
     * Add Exercise
     */
    public function storeWorkoutTemplate(Request $request){
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            
            
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
      
        $workout = new WorkoutTemplate();
        
        $workout->name= $request->name;
        $workout->save();
        return response()->json(['Workout Template Added',200]);
        
    }

}
