  @extends('admins.layout')
 @section('content')
 <div class="container-xxl flex-grow-1 container-p-y">
     <div class="row mb-5">
                <div class="col-md-12">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Insight Id : {{$insights->insight_id}}</h5>
                          <h5 class="card-title">Header Image :  <img src="/admins/assets/img/insights/header_image/{{$insights->header_image}}" alt="{{$insights->header_image}}"
                                     width="200" height="200"></h5>
                          <h5 class="card-title">Small Image : <img src="/admins/assets/img/insights/small_image/{{$insights->small_image}}" alt="{{$insights->small_image}}"
                                     width="200" height="200"></h5>
                          <h5 class="card-title">Heading : {{$insights->heading}}</h5>
                          <h5 class="card-title">Description : {{$insights->description}}</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</div>
@stop