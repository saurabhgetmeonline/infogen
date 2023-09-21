 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
     <!-- Content -->

     <div class="container-xxl flex-grow-1 container-p-y">
         <h4 class="fw-bold py-3 mb-4">Update About Us</h4>

         <!-- Basic Layout & Basic with Icons -->
         <div class="row">
             <!-- Basic Layout -->
             <div class="col-xxl">
                 <div class="card mb-4">
                     <div class="card-body">
                         <form action="{{url('about/'.$abouts->about_id)}}" method="post" enctype="multipart/form-data">
                             {!! csrf_field() !!}
                             @method("PATCH")
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">About Id</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="about_id" name="about_id" value="{{$abouts->about_id}}" disabled />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Header Image</label>
                                 <div class="col-sm-10">
                                     <input type="file" class="form-control mb-4" id="header_image" name="header_image" />
                                     <img src="/admins/assets/img/aboutus/header_image/{{$abouts->header_image}}" alt="{{$abouts->header_image}}" width="200" height="200">
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Text</label>
                                 <div class="col-sm-10">
                                     <textarea id="text" name="text" class="form-control editor">{{$abouts->text}}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Vision</label>
                                 <div class="col-sm-10">
                                     <textarea id="vision" name="vision" class="form-control editor">{{$abouts->vision}}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Mission</label>
                                 <div class="col-sm-10">
                                     <textarea id="mission" name="mission" class="form-control editor">{{$abouts->mission}}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Values</label>
                                 <div class="col-sm-10">
                                     <textarea id="values" name="values" class="form-control editor">{{$abouts->values}}</textarea>
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