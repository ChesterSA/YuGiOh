<?php

namespace C16R\Yugioh;

class Deck
{

    protected $name;
    protected $deck = [];
    protected $wins = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


    public function getDeck()
    {
        return $this->deck;
    }

    public function addCards($cards)
    {
        foreach ($cards as $card) {
            $this->addCard($card['name'], $card['atk'], $card['type']);
        }
    }

    public function addCard($name, $atk, $type)
    {
        $this->deck[] = [
            'name' => $name,
            'atk' => $atk,
            'type' => $type
        ];
    }

    public function getWins()
    {
        return $this->wins;
    }

    public function addWin()
    {
        $this->wins++;
    }
}