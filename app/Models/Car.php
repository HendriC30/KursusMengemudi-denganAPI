<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $fillable = ['id', 'car','brand_id'];
    protected $guarded = [];

    public function Brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function Student()
    {
        return $this->hasMany(Student::class);
    }
}
