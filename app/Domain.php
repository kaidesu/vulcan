<?php

namespace Vulcan;

use Vulcan\Listener;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];

    /**
     * Get the triggers tied to the domain.
     */
    public function listeners()
    {
        return $this->hasMany(Listener::class);
    }
}
