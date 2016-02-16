<?php namespace drugTeam\Controllers;

use League\Plates\Engine;

/**
 * @author Antony Kalogeropoulos
 * @since 2/16/2016
 */
class Controller
{
    protected $views;

    public function __construct()
    {
        $this->views = new Engine(__DIR__ . '/../Views');
    }

}