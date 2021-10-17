<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $previews = [
            'previews/73rgfdKnltzgpdIhePTBXDbFbrD73ci7Ek6k0o7u.png',
            'previews/o3BBNVJPeT92NYk1PMaqJCzd4UG6AGCWxFp0A8Qm.png',
            'previews/0QgqEnw6n2YX5HGSBFOzXA1gysq5aB6k3ENfjF9T.jpg',
            'previews/qTqaP6nk0BnDbOGRXBPxQsVN8mfVaK7bq8lmnYug.jpg'
        ];

        return [
            'author_id' => rand(1, 5),
            'title' => $this->faker->sentence(rand(3, 5)),
            'description' => $this->faker->sentence(rand(6, 21)),
            'path' => 'videos/y9Tsigvty5CZd3ABC7UMM07q491CVFp1SjpNJOIU.mp4',
            'preview_path' => $this->faker->randomElement($previews),
            'private' => rand(0, 1),
            'disabled_comments' => rand(0, 1),
            'code' => Str::random(20)
        ];
    }
}
