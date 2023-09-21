  @extends('admins.layout')
  @section('content')
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Home First Section Id : {{$home_first_section->home_first_section_id}}</h5>
                <h5 class="card-title">Image : <img src="/admins/assets/img/homepage/home_first_section/{{$home_first_section->image}}" alt="{{$home_first_section->image}}" width="200" height="200"></h5>
                <h5 class="card-title">Button Text : {{$home_first_section->button_text}}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop