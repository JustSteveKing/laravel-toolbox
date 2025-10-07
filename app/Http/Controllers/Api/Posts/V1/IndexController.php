<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Posts\V1;

use App\Models\Post;
use Illuminate\Http\Request;

final class IndexController
{
    public function __invoke(Request $request)
    {
        return Post::query()->get();
    }
}
