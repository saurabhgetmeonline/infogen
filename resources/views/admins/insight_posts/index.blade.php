 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
     <!-- Content -->
     <div class="container-xxl flex-grow-1 container-p-y">
         <!-- Basic Bootstrap Table -->
         <div class="card">
                <div class="col-md-10 my-4 ms-4">
                    <a href="{{url('insight-post/create')}}" class="btn btn-primary me-2">Add</a>
                </div>
             <div class="table-responsive text-nowrap ms-4 me-4">
                 <table class="table" id="table">
                     <thead>
                         <tr>
                             <th></th>
                             <th>Insight Post Id</th>
                             <th>Thumbnail Image</th>
                             <th>Featured Image</th>
                             <th>Heading</th>
                             <th>Category</th>
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tbody class="table-border-bottom-0">
                         @foreach($insight_posts as $insight_post)
                         <tr>
                             <td><a href="{{url('/insight-post/duplicate-row/'.$insight_post->insight_post_id)}}" title="Duplicate">
                                     <i class='bx bx-duplicate'></i>
                                 </a></td>
                             <td>{{$loop->iteration}}</td>
                             <td> <img
                             src="/admins/assets/img/insights/thumbnail_image/{{$insight_post->thumbnail_image}}"
                             alt="{{$insight_post->thumbnail_image}}" width="200" height="200"></td>
                             <td><img src="/admins/assets/img/insights/featured_image/{{$insight_post->featured_image}}"
                             alt="{{$insight_post->featured_image}}" width="200" height="200"></td>
                             <td>{{$insight_post->heading}}</td>                    
                             <td>{{$insight_post->category}}</td>
                             <td>
                                 <div class="dropdown">
                                     <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                         data-bs-toggle="dropdown">
                                         <i class="bx bx-dots-vertical-rounded"></i>
                                     </button>
                                     <div class="dropdown-menu">
                                         <a class="dropdown-item"
                                             href="{{url('/insight-post/'.$insight_post->insight_post_id)}}"><i
                                                 class="bx bx-show me-1"></i> View</a>
                                         <a class="dropdown-item"
                                             href="{{url('/insight-post/'.$insight_post->insight_post_id.'/edit')}}"><i
                                                 class="bx bx-edit-alt me-1"></i> Edit</a>
                                         <form action="{{url('/insight-post'.'/'.$insight_post->insight_post_id)}}"
                                             method="post">
                                             {{ method_field("DELETE") }}
                                             {{ csrf_field() }}
                                             <button class="dropdown-item" type="submit"
                                                 onclick="return confirm(&quot;Confirm Delete&quot;)"><i
                                                     class="bx bx-trash me-1"></i>Delete</button>
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