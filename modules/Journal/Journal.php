<?php

namespace Modules\Journal;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];
    
    /**
     * A journal has many entries.
     *
     * @return HasMany
     */
    public function entries()
    {
        $this->hasMany(Entry::class);
    }
    
    /**
     * A journal can belong to a parent journal.
     *
     * @return BelongsTo
     */
    public function parent()
    {
        $this->belongsTo(Journal::class, 'parent_id');
    }
    
    /**
     * A journal can have many children journals.
     *
     * @return HasMany
     */
    public function children()
    {
        $this->hasMany(Journal::class, 'parent_id');
    }
}
