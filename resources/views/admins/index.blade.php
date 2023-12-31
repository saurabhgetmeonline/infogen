 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
     <div class="container-xxl flex-grow-1 container-p-y">
         <div class="row">
             <div class="col-lg-12 mb-4 order-0">
                 <div class="card">
                     <div class="d-flex align-items-end row">
                         <div class="col-sm-12">
                             <div class="card-body">
                                 <h1 class="card-title text-primary text-center">Welcome to Infogence, 
                                     {{ Auth::guard('admin')->user()->fullname }}</h1>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @stop