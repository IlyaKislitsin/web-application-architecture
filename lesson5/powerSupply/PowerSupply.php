<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 09.09.2018
 * Time: 14:48
 */

namespace models\powerSupply;


class PowerSupply
{
    /**
     * @var string $brand
     * @var string $model
     * @var int $power
     * @var int $price
     */
    private $brand;
    private $model;
    private $power;
    private $price;

    /**
     * PowerSupply constructor.
     * @param $brand
     * @param $model
     * @param $power
     * @param $price
     */
    public function __construct($brand, $model, $power, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->power = $power;
        $this->price = $price;
    }


}