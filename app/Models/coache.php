<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coache extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function students()
    {
        return $this->hasMany(Student::class, 'coach_id'); // تأكد أن اسم العمود صحيح
    }
}