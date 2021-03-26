<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'inn',
        'general',
        'location',
        'phone',
        'alias',
    ];


    public function notes()
    {
        return $this->hasMany('App\Models\Note');
    }
}
