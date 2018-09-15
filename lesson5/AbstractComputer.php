<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 09.09.2018
 * Time: 14:26
 */

namespace models;


use models\videoCard\VideoCard;

abstract class AbstractComputer
{
    /**
     * @var $cpu
     * @var $motherboard
     * @var $powerSupply
     * @var $ram
     * @var $rom
     * @var $videoCard
     */
    protected $cpu;
    protected $motherboard;
    protected $powerSupply;
    protected $ram;
    protected $rom;

    /**
     * AbstractComputer constructor.
     * @param ComputerBuilder $computerBuilder
     */
    public function __construct(ComputerBuilder $computerBuilder)
    {
        $this->cpu = $computerBuilder->getCpu();
        $this->motherboard = $computerBuilder->getMotherboard();
        $this->powerSupply = $computerBuilder->getPowerSupply();
        $this->ram = $computerBuilder->getRam();
        $this->rom = $computerBuilder->getRom();
    }
}