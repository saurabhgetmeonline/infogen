<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Insight_category extends Model
{
    use Sluggable;
    protected $guarded=[];
    public function sluggable():array{
        return[
            'slug' =>[
                'source'=>'insight_category_name'
            ]
        ];
    }
    protected $table = "insight_categories";
    protected $primaryKey = "insight_category_id";
    protected $fillable =  ['insight_category_name'];
}
