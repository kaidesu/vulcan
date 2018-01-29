<?php

namespace App;

use App\Concerns\Orderable;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use Orderable;
    
    protected $fillable = ['body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
