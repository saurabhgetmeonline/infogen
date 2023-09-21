  @extends('admins.layout')
 @section('content')
 <div class="container-xxl flex-grow-1 container-p-y">
     <div class="row mb-5">
                <div class="col-md-12">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Insight Post Id : {{$insight_posts->insight_post_id}}</h5>
                          <h5 class="card-title"> Thumbnail Image: <img src="/admins/assets/img/insights/thumbnail_image/{{$insight_posts->thumbnail_image}}"
                                     alt="{{$insight_posts->thumbnail_image}}"
                                     width="200" height="200"></h5>
                          <h5 class="card-title"> Big Image: <img src="/admins/assets/img/insights/big_image/{{$insight_posts->big_image}}"
                                     alt="{{$insight_posts->big_image}}"
                                     width="200" height="200"></h5>
                          <h5 class="card-title"> Heading: {{$insight_posts->heading}}</h5>
                  
                          <h5 class="card-title"> Category: {{$insight_posts->category}}</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</div>
@stop