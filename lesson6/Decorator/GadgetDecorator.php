<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 25.09.2018
 * Time: 20:39
 */

namespace models\Decorator;


class GadgetDecorator implements BuyGadget
{
    /**
     * @var BuyGadget
     */
    protected $gadget;
    protected $list;
    protected $totalPrice;

    /**
     * GadgetDecorator constructor.
     * @param \models\Decorator\BuyGadget $gadget
     */
    public function __construct(BuyGadget $gadget)
    {
        $this->gadget = $gadget;
        $this->list = $gadget->getList();
        $this->totalPrice = $gadget->getPrice();
    }

    /**
     * @return mixed
     */
    public function getList()
    {
        return $this->gadget->getList();
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->gadget->getPrice();
    }
}