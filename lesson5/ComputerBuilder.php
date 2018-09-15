<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 15.09.2018
 * Time: 12:53
 */

namespace models;


use models\cpu\CPU;
use models\motherboard\Motherboard;
use models\powerSupply\PowerSupply;
use models\ram\RAM;
use models\rom\ROM;

abstract class ComputerBuilder
{
    protected $cpu;
    protected $motherboard;
    private $powerSupply;
    protected $ram;
    private $rom;

    /**
     * @return mixed
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * @param mixed $cpu
     */
    public function setCpu(CPU $cpu)
    {
        $this->cpu = $cpu;
    }

    /**
     * @return mixed
     */
    public function getMotherboard()
    {
        return $this->motherboard;
    }

    /**
     * @param mixed $motherboard
     */
    public function setMotherboard(Motherboard $motherboard)
    {
        $this->motherboard = $motherboard;
    }

    /**
     * @return mixed
     */
    public function getPowerSupply()
    {
        return $this->powerSupply;
    }

    /**
     * @param mixed $powerSupply
     */
    public function setPowerSupply(PowerSupply $powerSupply)
    {
        $this->powerSupply = $powerSupply;
    }

    /**
     * @return mixed
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @param mixed $ram
     */
    public function setRam(RAM $ram)
    {
        $this->ram = $ram;
    }

    /**
     * @return mixed
     */
    public function getRom()
    {
        return $this->rom;
    }

    /**
     * @param mixed $rom
     */
    public function setRom(ROM $rom)
    {
        $this->rom = $rom;
    }

    abstract public function build() {}
}