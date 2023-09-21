 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
   <!-- Content -->

   <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="fw-bold py-3 mb-4">Update Job Post</h4>

     <!-- Basic Layout & Basic with Icons -->
     <div class="row">
       <!-- Basic Layout -->
       <div class="col-xxl">
         <div class="card mb-4">
           <div class="card-body">
             <form action="{{url('career-page/'.$career_page->career_page_id)}}" method="post" enctype="multipart/form-data">
               {!! csrf_field() !!}
               @method("PATCH")
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Career Page Id</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="career_id" name="career_page_id" value="{{$career_page->career_page_id}}" disabled />
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Header Image</label>
                 <div class="col-sm-10">
                   <input type="file" class="form-control mb-4" id="header_image" name="header_image" />
                   <img src="/admins/assets/img/careers/{{$career_page->header_image}}" alt="{{$career_page->header_image}}" width="200" height="200">
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Image Text</label>
                 <div class="col-sm-10">
                   <textarea id="image_text" name="image_text" class="form-control editor">{!! $career_page->image_text !!}</textarea>
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Text</label>
                 <div class="col-sm-10">
                   <textarea id="text" name="text" class="form-control editor">{!! $career_page->text !!}</textarea>
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Career Title</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="career_title" name="career_title" value="{{$career_page->career_title}}" />
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