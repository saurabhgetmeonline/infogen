<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "abouts";
    protected $primaryKey = "about_id";
    protected $fillable =  ['header_image', 'text','vision','mission','values'];
}