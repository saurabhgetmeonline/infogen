<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultancy extends Model
{
    protected $table = "consulties";
    protected $primaryKey = "consultancy_id";
    protected $fillable =  ['bullet_description','description'];
}
