 @extends('admins.layout')
 @section('content')
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Update Report Category</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{url('report_category/'.$report_categories->report_category_id )}}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        @method("PATCH")
                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Report Category Id</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="report_category_id" name="report_category_id" value="{{$report_categories->report_category_id}}" disabled />
                          </div>
                        </div>
                        <div class="row mb-3">
                                 <label class="col-sm-2 col-form-label" for="basic-default-name">Report Category Image</label>
                                 <div class="col-sm-10">
                                     <input type="file" class="form-control mb-4" id="report_category_image"
                                         name="report_category_image" />
                                     <img src="/admins/assets/img/reports/category_image/{{$report_categories->report_category_image}}"
                                         alt="{{$report_categories->report_category_image}}" width="200" height="200" />
                                 </div>
                             </div>
                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Report Category Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="report_category_name" name="report_category_name"  value="{{$report_categories->report_category_name}}"/>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
            @stop