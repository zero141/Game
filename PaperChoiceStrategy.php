<?php
/**
 * Created by PhpStorm.
 * User: Vitaliy
 * Date: 3/17/2020
 * Time: 8:10 PM
 */

namespace game;
include_once 'ChoiceStrategy.php';


class PaperChoiceStrategy implements ChoiceStrategy
{
    public function do()
    {
        return 'paper';
    }

}