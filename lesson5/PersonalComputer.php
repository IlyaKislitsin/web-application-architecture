<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 09.09.2018
 * Time: 14:29
 */

namespace models;



use models\videoCard\VideoCard;

class PersonalComputer extends AbstractComputer
{
    /**
     * @var VideoCard|null $videoCard
     */

    private $videoCard;

    /**
     * @return mixed
     */
    public function getVideoCard()
    {
        return $this->videoCard;
    }

    /**
     * @param VideoCard $videoCard
     */
    public function setVideoCard(VideoCard $videoCard)
    {
        $this->videoCard = $videoCard;
    }

}