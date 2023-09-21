<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Why_choose_us extends Model
{
    protected $table = "why_choose_us";
    protected $primaryKey = "why_choose_us_id";
    protected $fillable = ['heading','description'];
}
