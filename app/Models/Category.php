<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title'
    ];

    public function getImageAttribute()
    {
        return asset('uploads/user') . '/' . $this->attributes['image'];
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'services', 'id', 'categories_id');
    }
}
