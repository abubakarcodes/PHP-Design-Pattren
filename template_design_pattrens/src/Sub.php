<?php


namespace Acme;


abstract class Sub
{

    public function make()
    {
        return $this->layBread()
            ->addLettuce()
            ->primaryToppings()
            ->addSauces();
    }

    public function layBread()
    {
        var_dump("laying bread");
        return $this;
    }

    public function addLettuce()
    {
        var_dump("adding lettuce");
        return $this;
    }



    public function addSauces()
    {
        var_dump("adding sauces");
        return $this;
    }
public abstract  function primaryToppings();
}