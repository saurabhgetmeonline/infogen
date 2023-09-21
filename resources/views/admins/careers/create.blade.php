 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
   <!-- Content -->

   <div class="container-xxl flex-grow-1 container-p-y">
     <h4 class="fw-bold py-3 mb-4">Create Job Post</h4>

     <!-- Basic Layout & Basic with Icons -->
     <div class="row">
       <!-- Basic Layout -->
       <div class="col-xxl">
         <div class="card mb-4">
           <div class="card-body">
             <form action="{{url('career')}}" method="post">
               {!! csrf_field() !!}
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Header Image</label>
                 <div class="col-sm-10">
                   <input type="file" class="form-control" id="header_image" name="header_image" />
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Image Text</label>
                 <div class="col-sm-10">
                   <textarea id="image_text" name="image_text" class="form-control editor"></textarea>
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Text</label>
                 <div class="col-sm-10">
                   <textarea id="text" name="text" class="form-control editor"></textarea>
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Career Title</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="career_title" name="career_title" />
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Job Postion</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="position" name="position" />
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Company Name</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="company_name" name="company_name" />
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Location</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="location" name="location" />
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Date</label>
                 <div class="col-sm-10">
                   <input type="date" class="form-control" id="date" name="date" />
                 </div>
               </div>
               <div class="row mb-3">
                 <label for="defaultSelect" class="form-label col-sm-2">Job Type</label>
                 <div class="col-md-10">
                   <select id="job_type" class="form-select" name="job_type">
                     <option value="Full Time">Full Time</option>
                     <option value="Part Time">Part Time</option>
                     <option value="Internship">Internship</option>
                   </select>
                 </div>
               </div>
               <div class="row mb-3">
                 <label for="defaultSelect" class="form-label  col-sm-2">Location Type</label>
                 <div class="col-md-10">
                   <select id="location_type" class="form-select" name="location_type">
                     <option value="On-site">On-site</option>
                     <option value="Hybrid">Hybrid</option>
                     <option value="Remote">Remote</option>
                   </select>
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                 <div class="col-sm-10">
                   <textarea id="description" name="description" class="form-control editor"></textarea>
                 </div>
               </div>
               <div class="row mb-3">
                 <label class="col-sm-2 col-form-label" for="basic-default-name">Summary</label>
                 <div class="col-sm-10">
                   <textarea id="summary" name="summary" class="form-control editor"></textarea>
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