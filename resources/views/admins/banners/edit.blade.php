 @extends('admins.layout')
 @section('content')
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4">Update Banner</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{url('banner/'.$banners->banner_id)}}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        @method("PATCH")
                        
                        <div class="row mb-3">
                         <label class="col-sm-2 col-form-label" for="basic-default-name">Banner Id</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="banner_id" name="banner_id" value="{{$banners->banner_id}}" disabled/>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Banner Image</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control mb-4" id="banner_image" name="banner_image" />
                            <img src="/admins/assets/img/homepage/banners/{{$banners->banner_image}}" alt="{{$banners->banner_image}}"  width="600" height="200"/>
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