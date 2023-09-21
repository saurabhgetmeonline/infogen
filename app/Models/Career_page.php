<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career_page extends Model
{
    protected $table = "career_page";
    protected $primaryKey = "career_page_id";
    protected $fillable =  ['header_image', 'image_text', 'text', 'career_title'];
}
