<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Report_view extends Model
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
    protected $table = "report_views";
    protected $primaryKey = "report_view_id";
    protected $fillable =  ['heading', 'slug','report_code','published_on','featured_image','thumbnail_image','short_description','page','category','category_id','default_description','request_description','table_of_content','methodology','single_user_license','multi_user_license','enterprise_user_license','meta_title','meta_description','meta_tags','meta_keywords'];
}
