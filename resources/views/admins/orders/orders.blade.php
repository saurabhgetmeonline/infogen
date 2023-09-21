 @extends('admins.layout')
 @section('content')
 <div class="content-wrapper">
     <!-- Content -->
     <div class="container-xxl flex-grow-1 container-p-y">
         <div class="card">
             <div class="table-responsive text-nowrap">
                 <table class="table">
                     <thead>
                         <tr>
                             <th>Project</th>
                             <th>Client</th>
                             <th>Status</th>
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tbody class="table-border-bottom-0">
                         <tr>
                             <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong>
                             </td>
                             <td>Albert Cook</td>

                             <td><span class="badge bg-label-primary me-1">Active</span></td>
                             <td>
                                 <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-show me-2"></i> View</a>
                             </td>
                         </tr>
                         <tr>
                             <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                             <td>Barry Hunter</td>
                             <td><span class="badge bg-label-success me-1">Completed</span></td>
                             <td>
                                 <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-show me-2"></i> View</a>
                             </td>
                         </tr>
                         <tr>
                             <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong>
                             </td>
                             <td>Trevor Baker</td>
                             <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                             <td>
                                 <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-show me-2"></i> View</a>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap
                                     Project</strong>
                             </td>
                             <td>Jerry Milton</td>
                             <td><span class="badge bg-label-warning me-1">Pending</span></td>
                             <td>
                                 <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-show me-2"></i> View</a>
                             </td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
 </div>
 @stop