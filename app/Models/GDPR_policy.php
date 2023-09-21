<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GDPR_policy extends Model
{
    protected $table = "gdpr_policies";
    protected $primaryKey = "gdpr_policy_id";
    protected $fillable =  ['description'];
}