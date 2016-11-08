<?php

namespace Vulcan;

use Vulcan\Domain;
use Vulcan\Response;
use Illuminate\Database\Eloquent\Model;

class Trigger extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'domain_id', 'trigger',
    ];

    /**
     * Get the domain that owns the trigger.
     */
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    /**
     * Get the responses tied to the trigger.
     */
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
