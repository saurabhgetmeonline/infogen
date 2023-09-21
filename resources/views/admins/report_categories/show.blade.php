  @extends('admins.layout')
 @section('content')
 <div class="container-xxl flex-grow-1 container-p-y">
     <div class="row mb-5">
                <div class="col-md-12">
                  <div class="card mb-3">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Report Category Id : {{$report_categories->report_category_id}}</h5>
                            <h5 class="card-title">Category Image : <img src="/admins/assets/img/reports/category_image/{{$report_categories->report_category_image}}" alt="{{$report_categories->report_category_image}}"  width="200" height="200"/></h5>
                          <h5 class="card-title">Report Category Name : {{$report_categories->report_category_name}}</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</div>
@stop