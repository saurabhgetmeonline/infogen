<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $table = "industries";
    protected $primaryKey = "industry_id";
    protected $fillable =  ['bullet_description','description'];
}
