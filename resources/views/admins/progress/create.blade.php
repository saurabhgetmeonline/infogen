 @extends('admins.layout')
 @section('content')
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Create Progress</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{url('progress')}}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Progress Image</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" id="progress_image" name="progress_image" />
                          </div>
                        </div>
                           <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Heading</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="heading" name="heading" />
                          </div>
                        </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                          <div class="col-sm-10">
                              <textarea
                              id="description" name ="description"
                              class="form-control" 
                            ></textarea>
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