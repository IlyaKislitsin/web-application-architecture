<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 25.09.2018
 * Time: 20:21
 */

namespace models\Decorator;


class OnlyGadget implements BuyGadget
{
    /**
     * @var Gadget $gadget
     * @var array $list
     * @var integer|null $price
     */
    protected $gadget;
    protected $list = [];
    protected $totalPrice;

    /**
     * OnlyGadget constructor.
     * @param \models\Decorator\Gadget $gadget
     */
    public function __construct(Gadget $gadget)
    {
        $this->gadget = $gadget;
        $this->list[$gadget->getType()] = $gadget->getBrand() . ' ' . $gadget->getModel();
        $this->totalPrice = $gadget->getPrice();
    }

    /**
     * @return array
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @return integer
     */
    public function getPrice()
    {
        return $this->totalPrice;
    }
}