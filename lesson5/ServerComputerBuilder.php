<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 15.09.2018
 * Time: 12:32
 */

namespace models;


use models\cpu\CPUForServerComputer;
use models\motherboard\MotherboardForServerComputer;
use models\ram\RAMForServerComputer;


class ServerComputerBuilder extends ComputerBuilder
{

    /**
     * @param mixed $cpu
     */
    public function setCpu(CPUForServerComputer $cpu)
    {
        $this->cpu = $cpu;
    }

    /**
     * @param mixed $motherboard
     */
    public function setMotherboard(MotherboardForServerComputer $motherboard)
    {
        $this->motherboard = $motherboard;
    }

    /**
     * @param mixed $ram
     */
    public function setRam(RAMForServerComputer $ram)
    {
        $this->ram = $ram;
    }


    /**
     * @return ServerComputer
     */
    public function build()
    {
        return new ServerComputer($this);
    }
}