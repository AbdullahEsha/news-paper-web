<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = "id";
    protected $fillable = ['name', 'email', 'phone', 'userType', 'password'];
    
    const CREATED_AT = "created_at";
    const UPDATED_AT = "updated_at";
}
