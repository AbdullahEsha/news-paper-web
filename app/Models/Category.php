<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'category';
    protected $primaryKey = "id";
    protected $fillable = ['categoryName', 'metaDescription', 'status'];
    
    const CREATED_AT = "created_at";
    const UPDATED_AT = "updated_at";
}
