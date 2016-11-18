<?php

namespace Vulcan;

use Vulcan\Listener;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'listener_id', 'response',
    ];

    /**
     * Get the trigger that owns the response.
     */
    public function listener()
    {
        return $this->belongsTo(Listener::class);
    }
}
