<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Array_;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $productSuffixes = ['Areal', 'Beach Resort', 'Bay', 'Resort', 'Coastal', 'World', 'Reef', 'Island'];
        $name = $this->faker->company . ' ' . Arr::random($productSuffixes);

        $image = ['images/product-1-370x270.jpg','images/product-2-370x270.jpg','images/product-3-370x270.jpg',
            'images/product-4-370x270.jpg','images/product-5-370x270.jpg','images/product-6-370x270.jpg'];
        $img = '' . Arr::random($image);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->realText(320),
            'price' => $this->faker->numberBetween(1000, 10000),
            'bedroom' => $this->faker->numberBetween(1,5),
            'bathroom' => $this->faker->numberBetween(1,5),
            'reviews' => $this->faker->numberBetween(1,300),
            'images' => $img,
        ];
    }
}
