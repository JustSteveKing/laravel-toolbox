<?php

declare(strict_types=1);

use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(static function (): void {
    Route::prefix('users')->as('users:')->group(static function (): void {
        Route::get('/', Api\Users\V1\IndexController::class)->name('index');
        Route::get('{user}', Api\Users\V1\ShowController::class)->name('show');
    });

    Route::prefix('posts')->as('posts:')->group(static function (): void {
        Route::get('/', Api\Posts\V1\IndexController::class)->name('index');
        Route::get('{post}', Api\Posts\V1\ShowController::class)->name('show');
    });
});
