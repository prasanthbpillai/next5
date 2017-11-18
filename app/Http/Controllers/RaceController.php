<?php
/**
 * Race Controller to manage the API requests against RACE Object
 * @namespace API
 *
 * @author: Prasanth Pillai <prasanthbpillai@gmail.com>
 * @since 18-11-17
 */


use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\Response;
use Services\RaceService;

class RaceController extends Controller
{

    public function all ($count = 5, RaceService $raceService)
    {
        return $raceService->getRaces();
    }

}