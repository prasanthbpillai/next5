<?php
/**
 * Race Services to hold the business logic for races
 * @namespace App\Services
 *
 * @author: Prasanth Pillai <prasanthbpillai@gmail.com>
 * @since 18-11-17
 */

namespace App\Services;


use App\Models\Race;

class RaceService
{

    /**
     *
     * @param int $count
     * @return string
     */
    public function getRaces ($count = 5, $type = null)
    {

    }


    /**
     * @param $raceId
     * @return mixed|static
     * @throws \Exception
     */
    public function getRace ($raceId)
    {
        $race = Race::find($raceId);

        if ($race) {
            return $race;
        } else {
            throw new \Exception('No race found with given details');
        }

    }

}