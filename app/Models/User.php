<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'street',
        'city',
        'state',
        'country',
        'post_code',
        'phone',
        'image',
        'status',
        'email',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/users/'.$this->getKey());
    }
}
