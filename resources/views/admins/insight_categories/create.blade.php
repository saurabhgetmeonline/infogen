 @extends('admins.layout')
 @section('content')
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Create Insight Category</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{url('insight-category')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Insight Category Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="insight_category_name" name="insight_category_name" />
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