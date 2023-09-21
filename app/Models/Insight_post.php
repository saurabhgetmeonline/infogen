<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Insight_post extends Model
{
    use Sluggable;
    protected $guarded=[];
    public function sluggable():array{
        return[
            'slug' =>[
                'source'=>'heading'
            ]
        ];
    }
    protected $table = "insight_posts";
    protected $primaryKey = "insight_post_id";
    protected $fillable =  ['thumbnail_image','featured_image','heading','report_code','slug','sort_description','published_on','page','category','text','meta_title','meta_description','meta_tags','meta_keywords'];
}
