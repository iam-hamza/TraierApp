<?php

namespace App\Models;
use App\Models\NutritionPlanMealType;
use Illuminate\Database\Eloquent\Model;

class WeeklyNutritionPlan extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function nutritonPlanType(){
        return $this->hasMany(NutritionPlanMealType::class, 'weekly_plan_id')->with('meal');
    }
    // public function nutritonPlanType(){
    //     return $this->hasManyThrough(NutritionPlanMeal::class,NutritionPlanMealType::class,'weekly_plan_id' ,'type_id');
    // }
}
