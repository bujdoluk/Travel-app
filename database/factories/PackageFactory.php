<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Package::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $packageSuffixes = ['Areal', 'Beach Resort', 'Bay', 'Resort', 'Coastal', 'World', 'Reef', 'Island'];
        $name = $this->faker->company . ' ' . Arr::random($packageSuffixes);

        $image = ['images/product-1-370x270.jpg','images/product-2-370x270.jpg','images/product-3-370x270.jpg',
            'images/product-4-370x270.jpg','images/product-5-370x270.jpg','images/product-6-370x270.jpg'];
        $img = '' . Arr::random($image);

        $per = ['Spring', 'Summer', 'Autumn', 'Winter'];
        $period = '' . Arr::random($per);

        $trans = ['Flight included', 'Flight not included', 'Car included', 'Train included', 'Taxi included'];
        $transport = '' . Arr::random($trans);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->realText(70),
            'price' => $this->faker->numberBetween(1000, 10000),
            'days' => $this->faker->numberBetween(1,20),
            'period' => $period,
            'transport' => $transport,
            'img' => $img,
            'date' => $this->faker->date(),
        ];
    }
}
