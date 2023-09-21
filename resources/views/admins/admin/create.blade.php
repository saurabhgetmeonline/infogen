 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
     <!-- Content -->

     <div class="container-xxl flex-grow-1 container-p-y">
         <h4 class="fw-bold py-3 mb-4">Create Admin</h4>

         <!-- Basic Layout & Basic with Icons -->
         <div class="row">
             <!-- Basic Layout -->
             <div class="col-xxl">
                 <div class="card mb-4">
                     <div class="card-body">
                         <form action="{{url('admin/user')}}" method="post" enctype="multipart/form-data">
                             {!! csrf_field() !!}
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Profile Image</label>
                                 <div class="col-sm-10">
                                     <input type="file" class="form-control" id="profile_image" name="profile_image" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Fullname</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="fullname" name="fullname" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Username</label>
                                 <div class="col-sm-10">
                                     <input type="text" class="form-control" id="username" name="username" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                                 <div class="col-sm-10">
                                     <input type="email" class="form-control" id="email" name="email" />
                                 </div>
                             </div>
                             <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                                 <div class="col-sm-10">
                                     <input type="password" class="form-control" id="password" name="password" />
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