 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
     <!-- Content -->

     <div class="container-xxl flex-grow-1 container-p-y">
         <h4 class="fw-bold py-3 mb-4">Update Report Category</h4>

         <!-- Basic Layout & Basic with Icons -->
         <div class="row">
             <!-- Basic Layout -->
             <div class="col-xxl">
                 <div class="card mb-4">
                     <div class="card-body">
                         <form action="{{url('report-view/'.$report_views->report_view_id )}}" method="post"
                             enctype="multipart/form-data">
                             {!! csrf_field() !!}
                             @method("PATCH")
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Report View Id</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="report_view_id" name="report_view_id"
                                         value="{{$report_views->report_view_id}}" disabled />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Heading</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="heading" name="heading"
                                         value="{{$report_views->heading}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Slug</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="slug" name="slug"
                                         value="{{$report_views->slug}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Report Code</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="report_code" name="report_code"
                                         value="{{$report_views->report_code}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Published On </label>
                                 <div class="col-sm-10">
                                     <input type="date" class="form-control" id="published_on" name="published_on"
                                         value="{{$report_views->published_on}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Featured Image </label>
                                 <div class="col-sm-10">
                                     <input type="file" class="form-control mb-4" id="display_image"
                                         name="display_image" />
                                     <img src="/admins/assets/img/reports/featured_image/{{$report_views->featured_image}}"
                                         alt="{{$report_views->featured_image}}" width="200" height="200">
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Thumbnail Image
                                 </label>
                                 <div class="col-sm-10">
                                     <input type="file" class="form-control mb-4" id="thumbnail_image"
                                         name="thumbnail_image" />
                                     <img src="/admins/assets/img/reports/thumbnail_image/{{$report_views->thumbnail_image}}"
                                         alt="{{$report_views->thumbnail_image}}" width="200" height="200">
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Short
                                     Description</label>
                                 <div class="col-sm-10">
                                     <textarea id="short_description" name="short_description"
                                         class="form-control">{{$report_views->short_description}}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Pages</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="page" name="page"
                                         value="{{$report_views->page}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Category</label>
                                 <div class="col-sm-10">
                                     <select id="category" name="category" class="form-select">
                                         @foreach($report_categories as $report_category)
                                         <option value="{{$report_category->report_category_name}}"
                                             {{$report_category->report_category_name == $report_views->category ? 'selected' : ''}}>
                                             {{$report_category->report_category_name}}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Default
                                     Description</label>
                                 <div class="col-sm-10">
                                     <textarea id="default_description" name="default_description"
                                         class="tinymce">{!! $report_views->default_description !!}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Request
                                     Description</label>
                                 <div class="col-sm-10">
                                     <textarea id="request_description" name="request_description"
                                         class="form-control">{!! $report_views->request_description !!}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Table of
                                     Content</label>
                                 <div class="col-sm-10">
                                     <textarea id="table_of_content" name="table_of_content"
                                         class="form-control">{!! $report_views->table_of_content !!}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Methodology</label>
                                 <div class="col-sm-10">
                                     <textarea id="methodology" name="methodology"
                                         class="form-control">{!! $report_views->methodology !!}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Single User
                                     License</label>
                                 <div class="col-sm-10">
                                     <input type="number" class="form-control" id="single_user_license"
                                         name="single_user_license" value="{{$report_views->single_user_license}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Multi User
                                     License</label>
                                 <div class="col-sm-10">
                                     <input type="number" class="form-control" id="multi_user_license"
                                         name="multi_user_license" value="{{$report_views->multi_user_license}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Enterprise User
                                     License</label>
                                 <div class="col-sm-10">
                                     <input type="number" class="form-control" id="enterprise_user_license"
                                         name="enterprise_user_license"
                                         value="{{$report_views->enterprise_user_license}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Title</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="meta_title" name="meta_title"
                                         value="{{$report_views->meta_title}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Meta
                                     Description</label>
                                 <div class="col-sm-10">
                                     <textarea class="form-control" id="meta_description"
                                         name="meta_description">{{$report_views->meta_description}}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Tags</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="meta_tags" name="meta_tags"
                                         value="{{$report_views->meta_tags}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Keywords</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                         value="{{$report_views->meta_keywords}}" />
                                 </div>
                             </div>
                             <div class="row justify-content-end">
                                 <div class="col-sm-10">
                                     <button type="submit" class="btn btn-primary">Send</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- / Content -->
     @stop