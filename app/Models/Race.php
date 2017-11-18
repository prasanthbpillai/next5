<?php
/**
 * Race Model for DB interactions
 * @namespace APP\Models
 *
 * @author: Prasanth Pillai <prasanthbpillai@gmail.com>
 * @since 18-11-17
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $table = 'races';

    /**
     * Return the competitors in the race
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function competitors()
    {
        return $this->hasMany('App\Models\Race\Competitor')->using('App\Models\Race\Position');
    }

    /**
     * Get the race type associated with he race
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function racetype()
    {
        return $this->hasOne('App\Models\Race\Type');
    }
}