<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 09.09.2018
 * Time: 15:15
 */

namespace models\videoCard;


class VideoCard
{
    /**
     * @var string $brand
     * @var string $model
     * @var int $price
     */
    private $brand;
    private $model;
    private $price;

    /**
     * VideoCard constructor.
     * @param $brand
     * @param $model
     * @param $price
     */
    public function __construct($brand, $model, $price)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
    }
}