 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
     <!-- Content -->

     <div class="container-xxl flex-grow-1 container-p-y">
         <h4 class="fw-bold py-3 mb-4">Create Report View</h4>

         <!-- Basic Layout & Basic with Icons -->
         <div class="row">
             <!-- Basic Layout -->
             <div class="col-xxl">
                 <div class="card mb-4">
                     <div class="card-body">
                         <form action="{{url('report-view')}}" method="post" enctype="multipart/form-data">
                             {!! csrf_field() !!}
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Heading</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="heading" name="heading" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Report Code</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="report_code" name="report_code" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Published On </label>
                                 <div class="col-sm-10">
                                     <input type="date" class="form-control" id="published_on" name="published_on" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Featured Image </label>
                                 <div class="col-sm-10">
                                     <input type="file" class="form-control" id="featured_image" name="featured_image" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Thumbnail Image
                                 </label>
                                 <div class="col-sm-10">
                                     <input type="file" class="form-control" id="thumbnail_image"
                                         name="thumbnail_image" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Short
                                     Description</label>
                                 <div class="col-sm-10">
                                     <textarea id="short_description" name="short_description"
                                         class="form-control"></textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Pages</label>
                                 <div class="col-sm-10">
                                     <input type="number" class="form-control" id="page" name="page" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Category</label>
                                 <div class="col-sm-10">
                                     <select id="category" name="category" class="form-select">
                                         @foreach($report_categories as $report_category)
                                         <option value="{{$report_category->report_category_name}}">
                                             {{$report_category->report_category_name}}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>
                             <input type="hidden" class="form-control" id="category_id"
                                         name="category_id" />
                             <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Default Description</label>
                             <div class="col-sm-10">
                                <textarea
                                id="default_description" name ="default_description"
                              ></textarea>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Request Description</label>
                             <div class="col-sm-10">
                                <textarea
                                id="request_description" name ="request_description"
                                class="form-control" 
                              ></textarea>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Table of Content</label>
                            <div class="col-sm-10">
                              <textarea
                              id="table_of_content" name ="table_of_content"
                              class="form-control" 
                              ></textarea>
                            </div>
                          </div>
                           <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Methodology</label>
                            <div class="col-sm-10">
                              <textarea
                              id="methodology" name ="methodology"
                              class="form-control" 
                              ></textarea>
                            </div>
                          </div>
                           <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Single User License ($)</label>
                                 <div class="col-sm-10">
                                     <input type="number" class="form-control" id="single_user_license" name="single_user_license" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Multi User License ($)</label>
                                 <div class="col-sm-10">
                                     <input type="number" class="form-control" id="multi_user_license" name="multi_user_license" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Enterprise User License ($)</label>
                                 <div class="col-sm-10">
                                     <input type="number" class="form-control" id="enterprise_user_license" name="enterprise_user_license" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Title</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="meta_title" name="meta_title" />
                                 </div>
                             </div>
                              <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Description</label>
                             <div class="col-sm-10">
                                <textarea class="form-control"
                                id="meta_description" name ="meta_description"
                              ></textarea>
                            </div>
                          </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Tags</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="meta_tags" name="meta_tags" />
                                 </div>
                             </div>
                              <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Keywords</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" />
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