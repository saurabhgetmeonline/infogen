<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_first_section extends Model
{
    protected $table = "home_first_section";
    protected $primaryKey = "home_first_section_id";
    protected $fillable =  ['image', 'text', 'button_text', 'button_url'];
}
