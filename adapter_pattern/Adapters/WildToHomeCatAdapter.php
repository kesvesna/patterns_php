<?php


class WildToHomeCatAdapter implements IHomeCat
{

    public function __construct(private IWildCat $wildCat)
    {
    }

    public function getName()
    {
        return $this->wildCat->getBreed();
    }

    public function setName($name)
    {
    }

    public function Meow()
    {
        $this->wildCat->Growl();
    }

    public function Scratch()
    {
        $this->wildCat->Scratch();
    }
}