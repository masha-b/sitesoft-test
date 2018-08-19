<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = ['text', 'user_id'];

    /**
     * Get the user that owns the message.
     *
     * @return User
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
