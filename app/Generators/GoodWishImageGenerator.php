<?php

namespace App\Generators;

use Intervention\Image\Facades\Image;

class GoodWishImageGenerator
{
    /**
     * @var Image
     */
    private $image;

    /**
     * GoodWishImageGenerator
     *
     * @param Image $image
     */
    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    public function generate()
    {

    }
}