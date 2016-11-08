<?php

namespace Vulcan;

use Vulcan\Trigger;
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
    public function triggers()
    {
        return $this->hasMany(Trigger::class);
    }
}
