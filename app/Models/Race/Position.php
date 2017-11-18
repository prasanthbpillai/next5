<?php
/**
 * Position Model for DB interactions
 * @namespace APP\Models\Race
 *
 * @author: Prasanth Pillai <prasanthbpillai@gmail.com>
 * @since 18-11-17
 */


namespace App\Models\Race;


use Illuminate\Database\Eloquent\Relations\Pivot;

class Position extends Pivot
{
    protected $table = 'positions';
}