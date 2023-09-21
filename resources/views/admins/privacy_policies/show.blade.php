  @extends('admins.layout')
  @section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row mb-5">
          <div class="col-md-12">
              <div class="card mb-3">
                  <div class="row g-0">
                      <div class="col-md-8">
                          <div class="card-body">
                              <h5 class="card-title">Privacy Policy Id : {{$privacy_policies->privacy_policy_id}}</h5>
                              <h5 class="card-title">Description : {{$privacy_policies->description}}</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @stop