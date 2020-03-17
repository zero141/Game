<?php
/**
 * Created by PhpStorm.
 * User: Vitaliy
 * Date: 3/17/2020
 * Time: 8:04 PM
 */

namespace game;


class Game
{
    public function main()
    {
        $player1 = new Player(new PaperChoiceStrategy());
        $player2 = new Player(new RandomChoiceStrategy());

        $result = [];

        for ($i = 0; $i < 100; $i++) {
            $fight = new  Fight($player1, $player2);
            $result[] = $fight->getBattleResult();
        }
        echo "<pre>";
        print_r($result);


    }


}