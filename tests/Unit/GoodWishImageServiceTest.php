<?php

namespace Tests\Unit;

use App\Generators\GoodWishImageGenerator;
use App\Services\Image\GoodWishImageService;
use Illuminate\Support\Facades\Storage;
use Mockery;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GoodWishImageServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAnswer()
    {
        // arrange
        $image = app(GoodWishImageGenerator::class);
        $target = new GoodWishImageService($image);
        $expected = ['assets/sample','png'];

        // act
        $actual = $target->answer();

        // assert
        $this->assertTrue(str_contains($actual, $expected));
    }
}
