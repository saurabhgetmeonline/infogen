 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
     <!-- Content -->

     <div class="container-xxl flex-grow-1 container-p-y">
         <h4 class="fw-bold py-3 mb-4">Update Home First Section</h4>

         <!-- Basic Layout & Basic with Icons -->
         <div class="row">
             <!-- Basic Layout -->
             <div class="col-xxl">
                 <div class="card mb-4">
                     <div class="card-body">
                         <form action="{{url('first-section/'.$home_first_section->home_first_section_id)}}" method="post" enctype="multipart/form-data">
                             {!! csrf_field() !!}
                             @method("PATCH")
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Home First Section Id</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="home_first_section_id" name="home_first_section_id" value="{{$home_first_section->home_first_section_id}}" disabled />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                                 <div class="col-sm-10">
                                     <input type="file" class="form-control mb-4" id="image" name="image" />
                                     <img src="/admins/assets/img/homepage/home_first_section/{{$home_first_section->image}}" alt="{{$home_first_section->image}}" width="200" height="200">
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Text</label>
                                 <div class="col-sm-10">
                                     <textarea id="text" name="text" class="form-control editor">{{$home_first_section->text}}</textarea>
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Button Text</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="button_text" name="button_text" value="{{$home_first_section->button_text}}" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Button Url</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="button_url" name="button_url" value="{{$home_first_section->button_url}}" />
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