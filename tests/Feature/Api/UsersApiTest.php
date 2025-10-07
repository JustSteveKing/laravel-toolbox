<?php

declare(strict_types=1);

use App\Models\User;

use function Pest\Laravel\getJson;

describe('Users API', function (): void {
    it('GET /api/v1/users returns 200 and a list', function (): void {
        User::factory()->count(2)->create();
        $response = getJson('/api/v1/users');
        $response->assertStatus(200)
            ->assertJsonStructure([
                '*' => [
                    'id',
                    // add more fields as needed
                ],
            ]);
    });

    it('GET /api/v1/users/{user} returns 200 and user data', function (): void {
        $user = User::factory()->create();
        $response = getJson("/api/v1/users/{$user->id}");
        $response->assertStatus(200)
            ->assertJsonStructure([
                'id',
                // add more fields as needed
            ]);
    });

    it('GET /api/v1/users/{user} returns 404 for non-existent user', function (): void {
        $nonExistentId = '01FAKEUSERID00000000000000'; // ULID format, unlikely to exist
        $response = getJson("/api/v1/users/{$nonExistentId}");
        $response->assertStatus(404);
    });

    it('GET /api/v1/users/{user} returns 404 for invalid id format', function (): void {
        $invalidId = 'not-a-valid-ulid';
        $response = getJson("/api/v1/users/{$invalidId}");
        $response->assertStatus(404);
    });
});
