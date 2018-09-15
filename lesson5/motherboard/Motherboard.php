<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 09.09.2018
 * Time: 14:46
 */

namespace models\motherboard;


abstract class Motherboard
{
    /**
     * @var $brand
     * @var $model
     * @var $price
     */
    private $brand;
    private $model;
    private $price;

    /**
     * Motherboard constructor.
     * @param string $brand
     * @param string $model
     * @param int $price
     */
    public function __construct($brand, $model, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
    }
}