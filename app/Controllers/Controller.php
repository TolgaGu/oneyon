<?php
/**
 * Created by PhpStorm.
 * User: Tolga
 * Date: 04/06/2019
 * Time: 22:20
 */

namespace App\Controllers;

use Slim\Views\Twig as View;

class Controller
{

    protected $container;
    public function __construct($container)
    {
        $this->container=$container;
    }


    public function __get($property)
    {
        // TODO: Implement __get() method.
        if($this->container->{$property}){
            return $this->container->{$property};
        }
    }
}