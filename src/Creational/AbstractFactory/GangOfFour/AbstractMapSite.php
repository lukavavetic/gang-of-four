<?php

namespace Src\Creational\AbstractFactory\GangOfFour;

abstract class AbstractMapSite
{
    abstract function enter();
    abstract function say() : void;
}