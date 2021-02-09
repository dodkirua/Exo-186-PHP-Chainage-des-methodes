<?php


class VODService
{
    private String $name;
    private Float $price;

    /**
     * VODService constructor.
     * @param String $name
     * @param Float $price
     */
    public function __construct(string $name, float $price)    {
        $this->setName($name)->setPrice($price);
    }

    /**
     * return name
     * @return String
     */
    public function getName(): string    {
        return $this->name;
    }

    /**
     * set name
     * @param String $name
     */
    public function setName(string $name): VODService    {
        $this->name = $name;
        return $this;
    }

    /**
     * return price
     * @return Float
     */
    public function getPrice(): float    {
        return $this->price;
    }

    /**
     * set price
     * @param Float $price
     */
    public function setPrice(float $price): VODService    {
        $this->price = $price;
        return $this;
    }

    public function __toString() : string{
        return $this->getName()." pour le prix de ". $this->getPrice() . " euros";
    }

}