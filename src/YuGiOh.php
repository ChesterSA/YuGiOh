<?php

namespace C16R\Yugioh;

class YuGiOh
{
    protected static $field;

    public static function setField(Field $field){
        self::$field = $field;
    }

    public static function runSimulation($decks)
    {
        $results = [];
        foreach($decks as $deck){
            $others = $decks;

            if (($key = array_search($deck, $others)) !== false) {
                unset($others[$key]);
            }

            foreach($others as $other){
                $results[] = self::compareDecks($deck, $other);
            }
        }
        return $results;
    }

    public static function runVsOpponents(array $decks, Deck $opponent)
    {
        $results = [];
        foreach($decks as $deck){

                $results[] = self::compareDecks($deck, $opponent);
        }
        return $results;
    }

    public static function compareDecks(Deck $deck1, Deck $deck2)
    {
        $wins = 0;
        $losses = 0;
        $draw = 0;

        foreach ($deck1->getDeck() as $card1) {
            foreach ($deck2->getDeck() as $card2) {
                foreach (self::$field->getField() as $token) {


                    $atk1 = $card1['type'] == $token ? $card1['atk'] * 2 : $card1['atk'];
                    $atk2 = $card2['type'] == $token ? $card2['atk'] * 2 : $card2['atk'];

                    if ($atk1 > $atk2) {
                        $wins++;
                    } else if ($atk2 > $atk1) {
                        $losses++;
                    } else {
                        $draw++;
                    }
                }
            }
        }

        if ($wins > $losses) {
            $deck1->addWin();
        }

        $total = $wins + $losses + $draw;

        $win_ratio = number_format($wins / $total, 3) * 100;
        $loss_ratio = number_format($losses / $total, 3) * 100;
        $draw_ratio = number_format($draw / $total, 3) * 100;

        return "{$deck1->getName()} vs {$deck2->getName()} | W: {$win_ratio}% L: {$loss_ratio}% D: {$draw_ratio}%";

    }

}