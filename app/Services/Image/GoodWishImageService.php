<?php

namespace App\Services\Image;

use App\Generators\GoodWishImageGenerator as Generator;
use Illuminate\Support\Facades\Storage;

    class GoodWishImageService
{
    /**
     * @var Generator
     */
    private $generator;

    /**
     * GoodWishImageService constructor.
     *
     * @param Generator $generator
     * @param Storage $storage
     */
    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }
    public function answer()
    {
        $id = rand(1, 9);

        return asset("assets/sample{$id}.png");
    }
}