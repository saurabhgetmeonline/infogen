<?php
  
namespace App\Exports;
  
use App\Models\Report_view;
use Maatwebsite\Excel\Concerns\FromCollection;  
use Maatwebsite\Excel\Concerns\WithHeadings;
  
class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Report_view::select("report_view_id","category_id", "heading","slug","report_code","published_on","display_image","thumbnail_image","short_description","page","category","big_image","default_description","request_description","table_of_content","methodology","single_user_license","multi_user_license","enterprise_user_license","meta_title","meta_description","meta_description","meta_tags","meta_keywords")->get();
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["ID", "Category Id", "Heading", "Slug", "Report Code", "Published On", "Display Image", "Thumbnail Image", "Short Description", "Page", "Category", "Big Image", "Default Description", "Request Description", "Table of Content", "Methodology", "Single User License", "Multi User License", "Enterprise User License", "Meta Title", "Meta Description","Meta Tags", "Meta Keywords"];
    }
}