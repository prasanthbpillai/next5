<?php
/**
 * Meeting Model for DB interactions
 * @namespace APP\Models
 *
 * @author: Prasanth Pillai <prasanthbpillai@gmail.com>
 * @since 18-11-17
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $table = 'meetings';

    /**
     * Fetch the associated races for a meeting
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function races()
    {
        return $this->hasMany('App\Models\Race');
    }
}