<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'from_id', 'to_id', 'content', 'read_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'read_at' => 'datetime',
    ];
    // Used to get user to message
    public function users()
    {
        return $this->belongsTo(User::class, 'from_id');
    }
    //Show user who have been messaged + history
    public function userFrom()
    {
        return $this->belongsTo(User::class, 'from_id');
    }
    //Show user who have been messaged + history, so no searching the user again
    public function userTo()
    {
        return $this->belongsTo(User::class, 'to_id');
    }
}
