<?php
/**
 * Race Controller to manage the API requests against RACE Object
 * @namespace API
 *
 * @author: Prasanth Pillai <prasanthbpillai@gmail.com>
 * @since 18-11-17
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Services\RaceService;

class RaceController extends Controller
{


    /**
     * @param RaceService $raceService
     * @param int $count
     * @param null $type
     * @return mixed
     */

    public function all (RaceService $raceService, $count = 5, $type = null)
    {

        try {
            $data['response'] =  $raceService->getRaces($count, $type);
            $data['code'] = 200;
        } catch (\Exception $e){
            $data = array(
                'code' => '404',
                'response' => $e->getMessage()
            );
        }
        return response()->json($data);
    }

    /**
     * @param RaceService $raceService
     * @param $raceId
     * @return mixed
     */
    public function get (RaceService $raceService, $raceId)
    {
        try {
            $data['response'] =  $raceService->getRace($raceId);
            $data['code'] = 200;
        } catch (\Exception $e){
            $data = array(
                'code' => '404',
                'response' => $e->getMessage()
            );
        }
        return response()->json($data);
    }
}