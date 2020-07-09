<?php


namespace Acme;


class VegeSub extends Sub
{

    public function primaryToppings()
    {
        var_dump("adding Vege Sub  on bread");
        return $this;
    }



}