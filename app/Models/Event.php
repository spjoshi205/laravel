<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Workshop;

class Event extends Model
{
    protected $table = "events";
    
    /**
     * Get the comments for the blog post.
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
    
    /**
     * Get the comments for the blog post.
     */
    public function startedEvent()
    {
        return self::join('workshops', 'events.id', '=', 'workshops.event_id')
        ->where('workshops.start', '>=', '2021-08-21 09:00:00')
        ->select('events.*')
        ->groupBy('events.id');
        
    }

}
