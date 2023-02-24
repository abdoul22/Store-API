<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'description', 'adreess', 'phone', 'email', 'favicon', 'instagram', 'twitter', 'tiktok', 'youtube', 'snapchat'];
    protected $table = 'settings';
}
