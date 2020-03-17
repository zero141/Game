<?php
/**
 * Created by PhpStorm.
 * User: Vitaliy
 * Date: 3/17/2020
 * Time: 8:10 PM
 */

namespace game;
include_once 'ChoiceStrategy.php';

class RandomChoiceStrategy implements ChoiceStrategy
{
    public function do()
    {
        $arr = ['paper', 'stone', 'scissors'];
        $key = array_rand($arr);
        return $arr[$key];
    }

}