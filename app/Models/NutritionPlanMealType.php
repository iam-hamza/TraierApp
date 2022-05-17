<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NutritionPlanMealType extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    /**
     * @return BelongsTo
     */
    public function meal()
    {
        return $this->HasMany(NutritionPlanMeal::class, 'type_id','id')->with('dish');
    }

}
