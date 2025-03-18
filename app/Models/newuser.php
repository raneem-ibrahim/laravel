<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class newuser extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'newusers';
    protected $fillable = ['name', 'email', 'password'];
    public function phone():HasOne
    {
         return $this->hasOne(phone::class);
    }
}
