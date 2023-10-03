 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
     <!-- Content -->

     <div class="container-xxl flex-grow-1 container-p-y">
         <h4 class="fw-bold py-3 mb-4">Update Insight Post</h4>

         <!-- Basic Layout & Basic with Icons -->
         <div class="row">
             <!-- Basic Layout -->
             <div class="col-xxl">
                 <div class="card mb-4">
                     <div class="card-body">
                         <form action="{{url('insight-post/'.$insight_posts->insight_post_id )}}" method="post" enctype="multipart/form-data">
                             {!! csrf_field() !!}
                             @method("PATCH")
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Insight Post Id</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="insight_post_id" name="insight_post_id" value="{{$insight_posts->insight_post_id}}" disabled />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Thumbnail Image
                                 </label>
                                 <div class="col-sm-10">
                                     <input type="file" class="form-control mb-4" id="thumbnail_image" name="thumbnail_image" />
                                     <img src="/admins/assets/img/insights/thumbnail_image/{{$insight_posts->thumbnail_image}}" alt="{{$insight_posts->thumbnail_image}}" width="200" height="200">
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Featured Image
                                 </label>
                                 <div class="col-sm-10">
                                     <input type="file" class="form-control mb-4" id="featured_image" name="featured_image" />
                                     <img src="/admins/assets/img/insights/featured_image/{{$insight_posts->featured_image}}" alt="{{$insight_posts->featured_image}}" width="200" height="200">
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Heading</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="heading" name="heading" value="{{$insight_posts->heading}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Report Code</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="report_code" name="report_code" value="{{$insight_posts->report_code}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Slug</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="slug" name="slug" value="{{$insight_posts->slug}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Short
                                     Description</label>
                                 <div class="col-sm-10">
                                     <textarea id="sort_description" name="sort_description" class="form-control">{{$insight_posts->sort_description}}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Published On </label>
                                 <div class="col-sm-10">
                                     <input type="date" class="form-control" id="published_on" name="published_on" value="{{$insight_posts->published_on}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Pages</label>
                                 <div class="col-sm-10">
                                     <input type="number" class="form-control" id="page" name="page" value="{{$insight_posts->page}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Category</label>
                                 <div class="col-sm-10">
                                     <select id="category" name="category" class="form-select">
                                         @foreach($insight_categories as $insight_category)
                                         <option value="{{$insight_category->insight_category_name}}" {{$insight_category->insight_category_name == $insight_posts->category ? 'selected' : ''}}>
                                             {{$insight_category->insight_category_name}}
                                         </option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Text</label>
                                 <div class="col-sm-10">
                                     <textarea id="editor" name="text" class="form-control editor">{!!$insight_posts->text !!}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Title</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{$insight_posts->meta_title}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Meta
                                     Description</label>
                                 <div class="col-sm-10">
                                     <textarea class="form-control" id="meta_description" name="meta_description">{{$insight_posts->meta_description}}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Tags</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="meta_tags" name="meta_tags" value="{{$insight_posts->meta_tags}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Keywords</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{$insight_posts->meta_keywords}}" />
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