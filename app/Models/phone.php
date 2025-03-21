<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
class phone extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['number', 'newuser_id'];

    public function user():BelongsTo
    {
        return $this->belongsTo(newuser::class);
    }
}
