<?php
/**
 * Created by PhpStorm.
 * User: conorsimpson
 * Date: 12/04/2016
 * Time: 21:05
 */

namespace Itb;


class image
{
    /**
     * path to logo itb image
     *
     * @var
     */
    private $image;


    /**
     * get the image path
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * set the image path
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = image;
    }

}