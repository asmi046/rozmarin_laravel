<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year',
        'slug',
        'img',
        'galery',
        'file',
        'description',
        'seo_title',
        'seo_description',
    ];

    protected $casts = [
        "galery" => 'array',
        "file" => 'array'
    ];

    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }
}
