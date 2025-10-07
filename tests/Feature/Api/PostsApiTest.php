<?php

declare(strict_types=1);

use App\Models\Post;

use function Pest\Laravel\getJson;

describe('Posts API', function (): void {
    it('GET /api/v1/posts returns 200 and a list', function (): void {
        $posts = Post::factory()->count(2)->create();
        $response = getJson('/api/v1/posts');
        $response->assertStatus(200)
            ->assertJsonStructure([
                '*' => [
                    'id',
                ],
            ]);
        $ids = $posts->pluck('id')->toArray();
        foreach ($response->json() as $item) {
            expect($ids)->toContain($item['id']);
        }
    });

    it('GET /api/v1/posts/{post} returns 200 and post data', function (): void {
        $post = Post::factory()->create();
        $response = getJson("/api/v1/posts/{$post->id}");
        $response->assertStatus(200)
            ->assertJsonStructure([
                'id',
                // add more fields as needed
            ])
            ->assertJsonFragment([
                'id' => $post->id,
            ]);
    });

    it('GET /api/v1/posts/{post} returns 404 for non-existent post', function (): void {
        $nonExistentId = '01FAKEPOSTID00000000000000'; // ULID format, unlikely to exist
        $response = getJson("/api/v1/posts/{$nonExistentId}");
        $response->assertStatus(404);
    });

    it('GET /api/v1/posts/{post} returns 404 for invalid id format', function (): void {
        $invalidId = 'not-a-valid-ulid';
        $response = getJson("/api/v1/posts/{$invalidId}");
        $response->assertStatus(404);
    });
});
