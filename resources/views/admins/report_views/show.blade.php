  @extends('admins.layout')
 @section('content')
 <div class="container-xxl flex-grow-1 container-p-y">
     <div class="row mb-5">
                <div class="col-md-12">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Report View Id : {{$report_views->report_view_id}}</h5>
                          <h5 class="card-title"> Heading: {{$report_views->heading}}</h5>
                          <h5 class="card-title"> Display Image: <img src="/admins/assets/img/reports/display_image/{{$report_views->display_image}}" alt="{{$report_views->display_image}}"
                                     width="200" height="200"></h5>
                          <h5 class="card-title"> Thumbnail Image: <img src="/admins/assets/img/reports/thumbnail_image/{{$report_views->thumbnail_image}}" alt="{{$report_views->thumbnail_image}}"
                                     width="200" height="200"></h5>
                          <h5 class="card-title"> Category: {{$report_views->category}}</h5>
                          <h5 class="card-title"> Big Image: <img src="/admins/assets/img/reports/big_image/{{$report_views->big_image}}" alt="{{$report_views->big_image}}"
                                     width="200" height="200"></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</div>
@stop