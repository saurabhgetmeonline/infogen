<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privacy_policy extends Model
{
    protected $table = "privacy_policies";
    protected $primaryKey = "privacy_policy_id";
    protected $fillable =  ['description'];
}