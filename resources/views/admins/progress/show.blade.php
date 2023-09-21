  @extends('admins.layout')
 @section('content')
 <div class="container-xxl flex-grow-1 container-p-y">
     <div class="row mb-5">
                <div class="col-md-12">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Progress Id : {{$progress->progress_id}}</h5>
                          <h5 class="card-title">Progress Image : <img src="/admins/assets/img/homepage/progress/{{$progress->progress_image}}" alt="{{$progress->progress_image}}"  width="200" height="200"/></h5>
                          <h5 class="card-title">Heading : {{$progress->heading}}</h5>
                          <h5 class="card-title">Description : {{$progress->description}}</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</div>
@stop