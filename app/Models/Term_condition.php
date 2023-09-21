<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term_condition extends Model
{
    protected $table = "term_conditions";
    protected $primaryKey = "term_condition_id";
    protected $fillable =  ['description'];
}