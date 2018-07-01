<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_id', 'job_tittle', 'job_category','job_nature','job_educational_req','job_year_of_exp','job_salary','job_location','job_description','job_dead_line',
    ];

    public function scopeSearch($query,$s){
        return $query->where('job_tittle','like','%'.$s.'%')
            ->orWhere('job_category','like','%'.$s.'%')
            ->orWhere('job_description','like','%'.$s.'%');
    }
}
