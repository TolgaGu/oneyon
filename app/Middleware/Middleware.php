<?php
/**
 * Created by PhpStorm.
 * User: Tolga
 * Date: 03/06/2019
 * Time: 19:28
 */

namespace App\Middleware;

class Middleware
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }
}