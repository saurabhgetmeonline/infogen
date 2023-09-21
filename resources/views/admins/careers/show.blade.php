  @extends('admins.layout')
 @section('content')
 <div class="container-xxl flex-grow-1 container-p-y">
     <div class="row mb-5">
                <div class="col-md-12">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Career Id : {{$careers->career_id}}</h5>
                          <h5 class="card-title">Job Postion : {{$careers->position}}</h5>
                          <h5 class="card-title">Company Name : {{$careers->company_name}}</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</div>
@stop