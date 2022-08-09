<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $fillable = ['id', 'brand'];
    protected $cast=['shifts'=>'array'];
    protected $guarded = [];

    public function Car()
    {
        return $this->hasMany(Car::class);
    }
    // public function Student()
    // {
    //     return $this->hasMany(Student::class);
    // }
    // public function Instructor()
    // {
    //     return $this->hasMany(Instructor::class);
    // }
}
