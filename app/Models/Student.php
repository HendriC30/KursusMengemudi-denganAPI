<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $fillable = ['name','phone_number','car_id'];
    protected $guarded = [];

    public function Car()
    {
        return $this->belongsTo(Car::class);
    }
    public function Instructor()
    {
        return $this->hasMany(Instructor::class);
    }
}
