<?php
/**
 * Created by PhpStorm.
 * User: Vitaliy
 * Date: 3/17/2020
 * Time: 8:04 PM
 */

include_once 'Game.php';
include_once 'Player.php';
include_once 'PaperChoiceStrategy.php';
include_once 'RandomChoiceStrategy.php';
include_once 'Fight.php';

use game\Game;

$game = new Game();
$game->main();