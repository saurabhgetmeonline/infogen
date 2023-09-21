 @extends('admins.layout')
 @section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
     <!-- Content -->
     <div class="container-xxl flex-grow-1 container-p-y">
         <!-- Basic Bootstrap Table -->
         <div class="card">
                <div class="col-md-10 my-4 ms-4">
                    <!-- <a href="{{url('report-view/create')}}" class="btn btn-primary me-2">Add</a> -->
                    <form action="{{ url('import') }}" method="post" enctype="multipart/form-data">
                        @csrf    
                        <div class="form-group mb-3">
                            <input id="file" type="file" name="file" class="form-control" required>
                        </div>
                            <a href="{{url('report-view/create')}}" class="btn btn-primary me-2">Add</a>
                            <button type="submit" class="btn btn-primary me-2">Import File</button>
                            <a href="{{ url('export') }}" class="btn btn-primary me-2">Export</a>
                    </form>
                    <!-- <a href="{{url('import')}}" class="btn btn-primary me-2">Import</a>
                    <a href="{{ url('export') }}" class="btn btn-primary">Export</a> -->

                    <!-- <a href="{{url('report-view/export')}}" class="btn btn-primary">Export</a> -->
                </div>
             <div class="table-responsive text-nowrap ms-4 me-4">
                 <table class="table" id="table">
                     <thead>
                         <tr>
                             <th></th>
                             <th>Report View Id</th>
                             <th>Heading</th>
                             <th>Featured Image</th>
                             <th>Thumbnail Image</th>
                             <th>Category</th>
                             <th>Actions</th>
                         </tr>
                     </thead>
                     <tbody class="table-border-bottom-0">
                         @foreach($report_views as $report_view)
                         <tr>
                             <td><a href="{{url('/report-view/duplicate-row/'.$report_view->report_view_id)}}" title="Duplicate">
                                     <i class='bx bx-duplicate'></i>
                                 </a></td>
                             <td>{{$loop->iteration}}</td>
                             <td>{{$report_view->heading}}</td>
                             <td><img src="/admins/assets/img/reports/featured_image/{{$report_view->featured_image}}"
                                     alt="{{$report_view->featured_image}}" width="200" height="200"></td>
                             <td> <img
                                     src="/admins/assets/img/reports/thumbnail_image/{{$report_view->thumbnail_image}}"
                                     alt="{{$report_view->thumbnail_image}}" width="200" height="200"></td>
                             <td>{{$report_view->category}}</td>
                             <td>
                                 <div class="dropdown">
                                     <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                         data-bs-toggle="dropdown">
                                         <i class="bx bx-dots-vertical-rounded"></i>
                                     </button>
                                     <div class="dropdown-menu">
                                         <a class="dropdown-item"
                                             href="{{url('/report-view/'.$report_view->report_view_id)}}"><i
                                                 class="bx bx-show me-1"></i> View</a>
                                         <a class="dropdown-item"
                                             href="{{url('/report-view/'.$report_view->report_view_id.'/edit')}}"><i
                                                 class="bx bx-edit-alt me-1"></i> Edit</a>
                                         <form action="{{url('/report-view'.'/'.$report_view->report_view_id)}}"
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