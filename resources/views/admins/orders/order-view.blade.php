 @extends('admins.layout')
 @section('content')
 <div class="content-wrapper">
     <!-- Content -->

     <div class="container-xxl flex-grow-1 container-p-y">
         <div class="row">
             <div class="col-xl">
                 <div class="card mb-4">
                     <div class="card-header">
                         <a href="#" class="btn btn-primary mb-4 float-end">Download Invoice</a>
                         <h4 class="mb-3">Order #11681 Details</h4>
                         <p>Payment via PayPal. Paid on September 1, 2023 @ 11:56 am.</p>
                     </div>
                     <div class="card-body">
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3">
                                     <h4 class="form-h4" for="basic-default-fullname">Date Created</h4>
                                     <p>September 1, 2023 @ 11:56 am.</p>
                                     <div class="row">
                                         <div class="col-md-3">
                                             <h4 class="form-h4" for="basic-default-company">Email ID</h4>
                                         </div>
                                         <div class="col-md-9">
                                             <p><a href="mailto:contact@infogenceglobalresearch.com">contact@infogenceglobalresearch.com</a>
                                             </p>
                                         </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-3">
                                             <h4 class="form-h4" for="basic-default-fullname">Phone</h4>
                                         </div>
                                         <div class="col-md-9">
                                             <p><a href="tel:+919356439799">+91 93564 39799</a></p>
                                         </div>
                                     </div>
                                     <h4 class="form-h4" for="basic-default-fullname">Payment Status</h4>
                                     <p class="badge bg-label-primary me-1">Completed</p>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="mb-3">
                                     <h4 class="form-h4" for="basic-default-company">Billing</h4>
                                     <p><strong>Full Name :</strong> Ankur J borah </p>
                                     <p><strong>Company Name :</strong> XYZ Pvt.Ltd.</p>
                                     <p><strong>Job Role :</strong> PHP Laravel Developer</p>
                                     <p><strong>Message :</strong> hii</p>
                                     <p><strong>Country :</strong> India</p>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="mb-3">

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-xl">
                 <div class="card">
                     <div class="table-responsive text-nowrap">
                         <table class="table table-borderless">
                             <thead>
                                 <tr>
                                     <th>Item</th>
                                     <th>License</th>
                                     <th>Total</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td><a href="#"><img src="/admins/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle avatar avatar-xs pull-up" /> <strong>Angular
                                                 Project</strong></a></td>
                                     <td>Single</td>
                                     <td>$1</td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- / Content -->
 </div>
 @stop