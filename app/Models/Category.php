<?php

namespace App\Models;

use Illuminate\Support\Str;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = ['name', 
    'slug', 
    'icon', 
    'tagline'];


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ($value);
        $this->attributes['slug'] = Str::slug($value);
    }

    public function workshops() : HasMany
    {
        return $this->hasMany(Workshop::class);
    }
}
