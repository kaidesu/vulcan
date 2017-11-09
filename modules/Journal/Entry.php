<?php

namespace Modules\Journal;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body'];
    
    /**
     * An entry belongs to a journal.
     *
     * @return BelongsTo
     */
    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }
}
