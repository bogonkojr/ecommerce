<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Unit;

class UnitFactory extends Factory
{
    protected $model = Unit::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'abbreviation' => $this->faker->word,
            'status' => $this->faker->boolean,
        ];
    }
}
