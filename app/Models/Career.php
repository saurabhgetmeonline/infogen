<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Career extends Model
{
    use Sluggable;
    protected $guarded=[];
    public function sluggable():array{
        return[
            'slug' =>[
                'source'=>'position'
            ]
        ];
    }
    protected $table = "careers";
    protected $primaryKey = "career_id";
    protected $fillable =  ['position','company_name','date','location','job_type','location_type','description','summary'];
}
