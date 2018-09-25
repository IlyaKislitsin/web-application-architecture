<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 25.09.2018
 * Time: 20:09
 */

namespace models\Decorator;


abstract class Gadget
{
    /**
     * @var string $brand
     * @var string $model
     * @var integer $price
     * @var string $type
     */
    protected $brand;
    protected $model;
    protected $price;
    protected $type;


    /**
     * Gadget constructor.
     * @param string $brand
     * @param string $model
     * @param integer $price
     */
    public function __construct($brand, $model, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

}