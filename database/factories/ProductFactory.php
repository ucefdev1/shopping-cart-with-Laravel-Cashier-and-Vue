<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $productSuffixes= ['Shoes','Sweater','Pants'];
        $name = $this->faker->company().' '.Arr::random($productSuffixes);
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'description'=>$this->faker->realText(320),
            'price'=>$this->faker->numberBetween(10000,100000), // 100$ - 1000$

        ];
    }
}
