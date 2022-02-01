{{-- {{dd($content_id)}} --}}
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
                      @if ($content_id == 1)
                      {{-- <span style="color:red;">(Current total weightage = 0)</span> --}}
                        <h6 class="mb-0">Fill in the details below for <span style="color:red;"><b>SALES & REVENUE - ANNUAL SALES (RM)</b></span> (Number only)</h6>
                      @elseif ($content_id == 2)
                        <h6 class="mb-0">Fill in the details below for <span style="color:red;"><b>HR - MANPOWER (Target 2022)</b></span> (Number only)</h6>
                      @elseif ($content_id == 3)
                        <h6 class="mb-0">Fill in the details below for <span style="color:red;"><b>DATABASE (pax)</b></span> (Number only)</h6>
                      @elseif ($content_id == 4)
                        <h6 class="mb-0">Fill in the details below for <span style="color:red;"><b>HR - MANPOWER (Currently)</b></span> (Number only)</h6>
                      @elseif ($content_id == 5)
                        <h6 class="mb-0">Fill in the details below for <span style="color:red;"><b>ULTIMATE PARTNERS (pax)</b></span> (Number only)</h6>
                      @elseif ($content_id == 6)
                        <h6 class="mb-0">Fill in the details below for <span style="color:red;"><b>ULTIMATE PLUS (pax)</b></span> (Number only)</h6>
                      @elseif ($content_id == 7)
                        <h6 class="mb-0">Fill in the details below for <span style="color:red;"><b>PLATINUM (pax)</b></span> (Number only)</h6>
                      @elseif ($content_id == 8)
                        <h6 class="mb-0">Fill in the details below for<span style="color:red;"><b></b></span>  (Number only)</h6>
                      @elseif ($content_id == 9)
                        <h6 class="mb-0">Fill in the details below for <span style="color:red;"><b>Facebook (Likes)</b></span> (Number only)</h6>
                      @elseif ($content_id == 10)
                        <h6 class="mb-0">Fill in the details below for <span style="color:red;"><b>Youtube (Subscribers)</b></span> (Number only)</h6>
                      @elseif ($content_id == 11)
                        <h6 class="mb-0">Fill in the details below for <span style="color:red;"><b>Instagram (Followers)</b></span> (Number only)</h6>
                      @elseif ($content_id == 12)
                        <h6 class="mb-0">Fill in the details below for <span style="color:red;"><b>Tiktok (Followers)</b></span> (Number only)</h6>
                      @endif 
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-md-6 mb-md-0">
                      {{-- <p>Achievement (Must be smaller or same than target)</p>   --}}
                      @if ($content_id == 4)
                        <p>Team</p>
                      @else  
                        <p>Achievement</p>
                      @endif  
                      <div class="card card-plain border-radius-lg align-items-center">
                        {{-- <input type="text" class="form-control" id="achievement" name="achievement"> --}}
                        {{-- <input type="text" class="form-control" pattern="[0-9]+" maxlength="10" class="input_achievement w-75" id="achievement" name="achievement" min="0" > --}}
                        <input type="text" pattern="[0-9]+" maxlength="13"  class="form-control" id="achievement" name="achievement" min="0" >
                        @error('achievement') <div class="text-danger">{{ $message }}</div> @enderror
                      </div>
                    </div>
                    <div class="col-md-6 mb-md-0">
                      @if ($content_id == 4)
                        <p>Intern</p>
                      @else  
                        <p>Target</p>
                      @endif  
                        <div class="card card-plain border-radius-lg align-items-center">
                          {{-- <input type="text" class="form-control" id="target" name="target"> --}}
                          {{-- <input type="text" class="form-control" pattern="[0-9]+" maxlength="10" class="input_target w-75" id="target" name="target" min="0" > --}}
                          <input type="text" pattern="[0-9]+" maxlength="13"  class="form-control" id="target" name="target" min="1" >
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