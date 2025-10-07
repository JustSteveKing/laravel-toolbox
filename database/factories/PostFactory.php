<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<Post> */
final class PostFactory extends Factory
{
    /** @var class-string<Post> */
    protected $model = Post::class;

    /** @return array<string,mixed> */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->realText(),
            'user_id' => User::factory(),
        ];
    }
}
