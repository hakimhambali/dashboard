{{-- {{dd($content_id)}} --}}
@section('content')
  <div>
    @extends('layouts.app')
    <body>
      <div class="container-fluid pb-4">
        <div class="row">
          
          <div class="col-12">
            @if (session('message'))
              <div class="alert alert-success alert-dismissible">
                  <strong>{{ session('message') }}</strong>
              </div>	
            @endif 
            @if (session('error'))
              <div class="alert alert-warning alert-dismissible">
                  <strong>{{ session('error') }}</strong>
              </div>	
            @endif

            <form action="{{ url('/employee/update/content/'.$id) }}" method="post">
              @csrf

              <div class="row">
                <div class="card">
                  <div class="card-header pb-0 p-3">
                    <div class="row">
                      <h3 class="mb-0">{{$data->name}}</h3>
                      <span class="text-danger text-sm">*Fill in the details below (Number only)</span>
                    </div>
                  </div>

                  <div class="card-body p-3">
                    @if ($data->category == "Membership")
                      <div class="row">
                        <div class="col-md-4 mb-2">
                          <label class="form-label">Achievement<span class="text-danger">*</span></label>
                          <input type="text" pattern="[0-9]+" maxlength="13"  class="form-control" id="achievement" name="achievement" value="{{$data->achievement}}" min="0" >
                          @error('active_membership') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-md-4 mb-2">
                          <label class="form-label">Target<span class="text-danger">*</span></label>
                          <input type="text" pattern="[0-9]+" maxlength="13"  class="form-control" id="target" name="target" value="{{$data->target}}" min="0" >
                          @error('active_membership') <div class="text-danger">{{ $message }}</div> @enderror  
                          </div>

                        <div class="col-md-4 mb-2">
                          <label class="form-label">Active Membership<span class="text-danger">*</span></label>
                          <div class="card card-plain border-radius-lg align-items-center">
                            <input type="text" pattern="[0-9]+" maxlength="13"  class="form-control" id="active_membership" name="active_membership" value="{{$data->active_membership}}" min="0" >
                            @error('active_membership') <div class="text-danger">{{ $message }}</div> @enderror  
                          </div>
                        </div>
                      </div>
                    @else
                      <div class="row">
                        <div class="col-md-6">
                          @if ($data->name == 'HR-MANPOWER (Currently)')
                            <label class="form-label">Team<span class="text-danger">*</span></label>
                          @else  
                            <label class="form-label">Achievement<span class="text-danger">*</span></label>
                          @endif 
                          <input type="text" pattern="[0-9]+" maxlength="13"  class="form-control" id="achievement" name="achievement" value="{{$data->achievement}}" min="0" >
                          @error('achievement') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>

                        <div class="col-md-6">
                          @if ($data->name == 'HR-MANPOWER (Currently)')
                            <label class="form-label">Intern<span class="text-danger">*</span></label>
                          @else  
                            <label class="form-label">Target<span class="text-danger">*</span></label>
                          @endif
                          <input type="text" pattern="[0-9]+" maxlength="13"  class="form-control" id="target" name="target" value="{{$data->target}}" min="1" >
                              @error('target') <div class="text-danger">{{ $message }}</div> @enderror                        
                            </div>
                        </div>
                      </div>
                    @endif

                    <div class="col-12 text-end p-3">
                      <button class="btn bg-gradient-dark mb-0" type="submit" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Save</button>
                    </div>
                  </div>

                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </body>
  </div>
@endsection