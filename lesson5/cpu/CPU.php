<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 09.09.2018
 * Time: 14:40
 */

namespace models\cpu;


abstract class CPU
{
    /**
     * @var $brand
     * @var $model
     * @var $numberOfCores
     * @var $coreFrequency
     * @var $price
     */
    private $brand;
    private $model;
    private $numberOfCores;
    private $coreFrequency;
    private $price;

    /**
     * CPU constructor.
     * @param string $brand
     * @param string $model
     * @param int $numberOfCores
     * @param float $coreFrequency
     * @param int $price
     */
    public function __construct($brand, $model, $numberOfCores, $coreFrequency, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->numberOfCores = $numberOfCores;
        $this->coreFrequency = $coreFrequency;
        $this->price = $price;
    }
}