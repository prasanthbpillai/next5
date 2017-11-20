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
        return $this->belongsToMany('App\Models\Race\Competitor', 'positions','race_id', 'competitor_id')->withPivot('position');
    }

    /**
     * Get the race type associated with he race
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function racetype()
    {
        return $this->hasOne('App\Models\Race\Type');
    }

    public function toArray()
    {
        $data = parent::toArray();
        $data['competitors'] = $this->competitors;
        return $data;
    }
}