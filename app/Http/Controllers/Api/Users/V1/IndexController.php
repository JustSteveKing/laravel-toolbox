<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Users\V1;

use App\Models\User;
use Illuminate\Http\Request;

final class IndexController
{
    public function __invoke(Request $request)
    {
        return User::query()->get();
    }
}
