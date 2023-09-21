<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insight extends Model
{
    protected $table = "insights";
    protected $primaryKey = "insight_id";
    protected $fillable =  ['header_image','small_image','heading','description'];
}
