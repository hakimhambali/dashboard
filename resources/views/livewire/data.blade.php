@section('content')
<div>
  @extends('layouts.app')
<body>
<div class="container-fluid py-4">
  <div class="row">
    <form action="{{ url('/employee/update/content/'.$content_id) }}" method="post">
      @csrf 
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
          <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Fill in the details below (Number only)</h6>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-md-6 mb-md-0">
                      {{-- <p>Achievement (Must be smaller or same than target)</p>   --}}
                      <p>Achievement</p>  
                      <div class="card card-plain border-radius-lg align-items-center">
                        {{-- <input type="text" class="form-control" id="achievement" name="achievement"> --}}
                        <input type="text" class="form-control" pattern="[0-9]+" maxlength="10" class="input_achievement w-75" id="achievement" name="achievement" min="0" >
                        @error('achievement') <div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                    </div>
                    <div class="col-md-6 mb-md-0">
                        {{-- <p>Target (Must be bigger or same than achievement)</p>  --}}
                        <p>Target</p> 
                        <div class="card card-plain border-radius-lg align-items-center">
                          {{-- <input type="text" class="form-control" id="target" name="target"> --}}
                          <input type="text" class="form-control" pattern="[0-9]+" maxlength="10" class="input_target w-75" id="target" name="target" min="0" >
                          @error('target') <div class="text-danger">{{ $message }}</div> @enderror                        
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 text-end p-3">
                  <button class="btn bg-gradient-dark mb-0" type="submit" href="javascript:;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Save</button>
                </div>
              </div>
            </div>
          </div>
        </form>  
  </div>
</div>
</body>
</div>
@endsection