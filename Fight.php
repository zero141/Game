<?php
/**
 * Created by PhpStorm.
 * User: Vitaliy
 * Date: 3/17/2020
 * Time: 8:31 PM
 */

namespace game;


class Fight
{
    private $player1;
    private $player2;

    function __construct($player1, $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function getBattleResult()
    {
        $choice1 = $this->player1->getChoice();
        $choice2 = $this->player2->getChoice();

        $result = [
            'win' => '',
            'player1' => $choice1,
            'player2' => $choice2
        ];

        if ($choice1 == $choice2) {
            $result['win'] = 'nothing';
            return $result;

        } elseif ($choice1 == "paper" and $choice2 == "stone") {
            $result['win'] = 'player1';
            return $result;
        } elseif ($choice1 == "paper" and $choice2 == "scissors") {
            $result['win'] = 'player2';
            return $result;
        }
    }

}