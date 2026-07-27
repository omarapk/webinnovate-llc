<?php

namespace Tests\Feature;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class BlogPostFeaturedImageUpdateTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Config::set('filesystems.featured_image_disk', 'public');
        Storage::fake('public');
    }

    public function test_update_stores_new_featured_image_before_removing_previous_file(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);

        $legacyPath = 'blog/legacy-feature.jpg';
        Storage::disk('public')->put($legacyPath, 'previous-binary');

        $post = BlogPost::create([
            'title' => 'Original',
            'slug' => 'original-slug-'.uniqid('', true),
            'content' => '<p>Body</p>',
            'status' => 'draft',
            'author_id' => $admin->id,
            'featured_image' => $legacyPath,
        ]);

        // Real JPEG bytes so `image` validation passes without the GD extension.
        $upload = UploadedFile::fake()->create(
            'replacement.jpg',
            base64_decode(
                '/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAABAAEDAREAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAX/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAX/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwCwABmX/9k=',
                true
            ) ?: ''
        );

        $response = $this->actingAs($admin)->put(route('admin.blog.posts.update', $post), [
            'title' => 'Updated title',
            'slug' => $post->slug,
            'content' => '<p>Updated body</p>',
            'status' => 'draft',
            'featured_image' => $upload,
        ]);

        $response->assertRedirect(route('admin.blog.posts.index'));

        $post->refresh();

        $this->assertNotSame($legacyPath, $post->featured_image);
        $this->assertNotNull($post->featured_image);
        Storage::disk('public')->assertMissing($legacyPath);
        Storage::disk('public')->assertExists($post->featured_image);
    }
}
