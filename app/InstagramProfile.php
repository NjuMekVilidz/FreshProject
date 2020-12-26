<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstagramProfile extends Model
{
    /** 
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'profile_name', 'profile_image', 'verified', 'user_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
