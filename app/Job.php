<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //protected $fillable = ['job_title','job_type','job_description','salary','slug'];
    protected $guarded = [];
    //Get the client that own the job
    function client() {
        return $this->belongsTo(User::class,'client_id');
    }
}
