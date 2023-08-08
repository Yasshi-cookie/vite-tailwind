<?php

namespace Tests\Feature;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    /**
     * @test
     */
    public function 正常系_test(): void
    {
        // makeメソッドで、データが挿入されるのはなぁぜなぁぜ？
        $author = Author::factory()->make();
        $post = Post::factory()
            ->recycle($author)
            ->make();
        dd($post);
    }

}
