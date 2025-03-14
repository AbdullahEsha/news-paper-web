<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'blog';
    protected $primaryKey = "id";
    protected $fillable = ['title', 'slug', 'description', 'metaDescription','author','status','category'];
    
    const CREATED_AT = "created_at";
    const UPDATED_AT = "updated_at";
}
