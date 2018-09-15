<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 09.09.2018
 * Time: 15:14
 */

namespace models\rom;


abstract class ROM
{
    /**
     * @var $brand
     * @var $model
     * @var $memory
     * @var $price
     */
    private $brand;
    private $model;
    private $memory;
    private $price;

    /**
     * ROM constructor.
     * @param string $brand
     * @param string $model
     * @param string $memory
     * @param int $price
     */
    public function __construct($brand, $model, $memory, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->memory = $memory;
        $this->price = $price;
    }
}