<?php
/**
 * Created by PhpStorm.
 * User: Vitaliy
 * Date: 3/17/2020
 * Time: 8:06 PM
 */

namespace game;


class Player
{
    private $strategy;

    function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function getChoice()
    {
        return $this->strategy->do();
    }

}