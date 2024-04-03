<?php

namespace App;

class Arena
{
    private array $monsters;
    private Hero $hero;
    private int $size;

    public function __construct(Hero $hero, array $monsters, int $size=10)
    {
        $this->hero=$hero;
        $this->monsters=$monsters;
        $this->size=$size;
    }

    public function getHero()
    {
        return $this->hero;
    }

    public function setHero(Hero $hero)
    {
        $this->hero=$hero;
    }

    public function getMonsters()
    {
        return $this->monsters;
    }

    public function setMonsters(Monster $monster)
    {
        $this->monsters=$monster;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize(Hero $size)
    {
        $this->size=$size;
    }

    public function getDistance(Fighter $fighter1, Fighter $fighter2)
    {
        $distance = sqrt((($fighter2->getX()-$fighter1->getX())**2)+(($fighter2->getY()-$fighter1->getY())**2));

        return $distance;
    }

    public function touchable(Fighter $fighter1, Fighter $fighter2)
    {
        if ($this->getDistance($fighter1, $fighter2) <= $fighter1->getRange()) {
            return true;
        } else {
            return false;
        }
    }
}