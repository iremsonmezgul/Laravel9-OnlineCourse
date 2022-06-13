<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    #one To Many
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    #one To Many Inverse
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    #one To Many
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
