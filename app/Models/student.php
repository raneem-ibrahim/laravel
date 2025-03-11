<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;


class student extends Model
{
    protected $fillable = ['name',  'number' ,'email'];
    use HasFactory;

    use SoftDeletes;

    public function profile():HasOne      
    {
        return $this->hasOne(profile::class);
    }
  


}
