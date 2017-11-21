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
use Illuminate\Support\Facades\DB;

class RaceService
{

    /**
     * @param int $count
     * @param null $type
     * @return \Illuminate\Support\Collection
     * @throws \Exception
     */
    public function getRaces ($count = 5, $type = null)
    {

         $races = Race::where('closing_time', '>', DB::raw('now()'))
                        ->orderBy('closing_time', 'desc')
                        ->take(5)
                        ->get();


        if ($races){
            return $races;
        } else {
            throw new \Exception('No races found at this moment');
        }
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