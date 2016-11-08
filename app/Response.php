<?php

namespace Vulcan;

use Vulcan\Trigger;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'trigger_id', 'response',
    ];

    /**
     * Get the trigger that owns the response.
     */
    public function trigger()
    {
        return $this->belongsTo(Trigger::class);
    }
}
