<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 15.09.2018
 * Time: 12:33
 */

namespace models;

use models\cpu\CPUForPersonalComputer;
use models\motherboard\MotherboardForPersonalComputer;
use models\ram\RAMForPersonalComputer;
use models\videoCard\VideoCard;


class PersonalComputerBuilder extends ComputerBuilder
{
    private $videoCard;


    /**
     * @param mixed $cpu
     */
    public function setCpu(CPUForPersonalComputer $cpu)
    {
        $this->cpu = $cpu;
    }

    /**
     * @param mixed $motherboard
     */
    public function setMotherboard(MotherboardForPersonalComputer $motherboard)
    {
        $this->motherboard = $motherboard;
    }


    /**
     * @param mixed $ram
     */
    public function setRam(RAMForPersonalComputer $ram)
    {
        $this->ram = $ram;
    }

    /**
     * @return mixed
     */
    public function getVideoCard()
    {
        return $this->videoCard;
    }

    /**
     * @param mixed $videoCard
     */
    public function setVideoCard(VideoCard $videoCard)
    {
        $this->videoCard = $videoCard;
    }




    /**
     * @return PersonalComputer
     */
    public function build()
    {
        return new PersonalComputer($this);
    }
}