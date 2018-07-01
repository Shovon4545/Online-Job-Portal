<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersCv extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'user_full_name', 'user_address','user_phone','user_email','user_objective','user_education','user_date_of_birth','user_experience',
    ];
}
