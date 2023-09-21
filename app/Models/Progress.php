<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $table = "progress";
    protected $primaryKey = "progress_id";
    protected $fillable =  ['progress_image','heading','description'];
}
