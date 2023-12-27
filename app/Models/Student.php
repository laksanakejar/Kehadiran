<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'name',
        'jk',
        'rombel',
        'rayon',
        'present',
        'image',
    ];
    public function absens()
    {
        return $this->hasMany('App\Models\Absen');
    }
}
