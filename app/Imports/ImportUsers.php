<?php
namespace App\Imports;
use App\Models\Report_view;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
class ImportUsers implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Report_view([
            'id'=> $row['id'],
            'category_id'=> $row['category_id'],
            'heading'    => $row['heading'], 
            'slug'    => $row['slug'], 
            'report_code'    => $row['report_code'], 
            'published_on'    => $row['published_on'], 
            'display_image'    => $row['display_image'], 
            'thumbnail_image'    => $row['thumbnail_image'], 
            'short_description'    => $row['short_description'], 
            'page'    => $row['page'], 
            'category'    => $row['category'], 
            'big_image'    => $row['big_image'], 
            'default_description'    => $row['default_description'], 
            'request_description'    => $row['request_description'], 
            'table_of_content'    => $row['table_of_content'], 
            'methodology'    => $row['methodology'], 
            'single_user_license'    => $row['single_user_license'], 
            'multi_user_license'    => $row['multi_user_license'], 
            'enterprise_user_license'    => $row['enterprise_user_license'], 
            'meta_title'    => $row['meta_title'], 
            'meta_description'    => $row['meta_description'],
            'meta_tags'    => $row['meta_tags'],
            'meta_keywords' => $row['meta_keywords'], 
        ]);
    }   
}