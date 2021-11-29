<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;
    protected $table = 'about_section';
    protected $fillable = [
        'en_content',
        'ku_content',
        'ar_content',
        'image',
    ];
}
