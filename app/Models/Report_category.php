<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Report_category extends Model
{
    use Sluggable;
    protected $guarded=[];
    public function sluggable():array{
        return[
            'slug' =>[
                'source'=>'report_category_name'
            ]
        ];
    }
    protected $table = "report_categories";
    protected $primaryKey = "report_category_id";
    protected $fillable =  ['report_category_image','report_category_name'];
}
