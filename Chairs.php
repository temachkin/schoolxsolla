<?php

/**
 * Created by PhpStorm.
 * User: tema
 * Date: 23.06.16
 * Time: 14:33
 */
class Chairs
{
    private $profit=0;

    public function getMaxProfit(array $offers, array $demands){
        sort($offers);
        rsort($demands);
        while (count($demands) && count($offers) && $demands[0]>$offers[0]){
            $this->profit += array_shift($demands) - array_shift($offers);
        }
        return $this->profit;
    }
}