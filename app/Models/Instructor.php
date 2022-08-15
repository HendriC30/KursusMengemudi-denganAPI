<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $fillable = ['name','phone_number','student_id'];
    protected $guarded = [];

    protected $with = ['student'];

    public function Student()
    {
        return $this->belongsTo(Student::class);
    }
}
