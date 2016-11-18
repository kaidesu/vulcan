<?php

namespace Vulcan;

use Vulcan\Domain;
use Vulcan\Response;
use Illuminate\Database\Eloquent\Model;

class Listener extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'domain_id', 'for',
    ];

    /**
     * Get the domain that owns the listener.
     */
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    /**
     * Get the responses tied to the listener.
     */
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
