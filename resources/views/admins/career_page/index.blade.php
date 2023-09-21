 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
   <!-- Content -->

   <div class="container-xxl flex-grow-1 container-p-y">
     <!-- Basic Bootstrap Table -->
     <div class="card">
       <div class="col-sm-10 my-4 ms-4">
         <a href="{{url('career-page/create')}}" class="btn btn-primary">Add</a>
       </div>

       <div class="table-responsive text-nowrap">
         <table class="table">
           <thead>
             <tr>
               <th>Career Page Id</th>
               <th>Header Image</th>
               <th>Actions</th>
             </tr>
           </thead>
           <tbody class="table-border-bottom-0">
             @foreach($career_page as $value)
             <tr>
               <td>{{$loop->iteration}}</td>
               <td><img src="/admins/assets/img/careers/{{$value->header_image}}" alt="{{$value->header_image}}" width="200" height="200"></td>
               <td>
                 <div class="dropdown">
                   <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                     <i class="bx bx-dots-vertical-rounded"></i>
                   </button>
                   <div class="dropdown-menu">
                     <a class="dropdown-item" href="{{url('/career-page/'.$value->career_page_id)}}"><i class="bx bx-show me-1"></i> View</a>
                     <a class="dropdown-item" href="{{url('/career-page/'.$value->career_page_id.'/edit')}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                     <form action="{{url('/career-page'.'/'.$value->career_page_id)}}" method="post">
                       {{ method_field("DELETE") }}
                       {{ csrf_field() }}
                       <button class="dropdown-item" type="submit" onclick="return confirm(&quot;Confirm Delete&quot;)"><i class="bx bx-trash me-1"></i>Delete</button>
                     </form>
                   </div>
                 </div>
               </td>
             </tr>
             @endforeach
           </tbody>
         </table>
       </div>
     </div>
     <!--/ Basic Bootstrap Table -->
   </div>
   <!-- / Content -->
   @endsection