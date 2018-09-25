<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 25.09.2018
 * Time: 20:50
 */

namespace models\Decorator;


class Headphones extends GadgetDecorator
{
    public $title = 'Наушники';
    public $brand = 'Headphones';
    public $price = 1500;

    /**
     * @return mixed
     */
    public function getList()
    {
        $this->addToList();
        return $this->gadget->getList();
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        $this->totalPrice += $this->price;
        return $this->gadget->getPrice();
    }

    /**
     * @return mixed
     */
    public function addToList () {
        $this->list[$this->title] = $this->brand;
        return $this->list;
    }
}