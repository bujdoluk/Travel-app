<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = ['images/blog-1-370x270.jpg','images/blog-2-370x270.jpg','images/blog-3-370x270.jpg',
            'images/blog-4-370x270.jpg','images/blog-5-370x270.jpg','images/blog-6-370x270.jpg'];
        $img = '' . Arr::random($image);

        return [
            'title' => $this->faker->country,
            'slug' => Str::slug($this->faker->country),
            'fullname' => $this->faker->name(),
            'date' => $this->faker->date(),
            'number' => $this->faker->numberBetween(1,200),
            'content' => $this->faker->realText(150),
            'img' => $img,
        ];
    }
}
