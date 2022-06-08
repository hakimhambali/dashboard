  <div class="container-fluid">
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

        <div class="card mb-4">
          <div class="card-body px-0 pt-0 pb-2">

            <div class="table-responsive p-0">
              <table class="table table-hover justify-content-center mb-0">
                <thead>
                  <tr class="text-xxs opacity-8 text-center">
                    <th></th>
                    <th><b>DESCRIPTION</b></th>
                    <th><b>ACHIEVEMENT</b></th>
                    <th><b>TARGET</b></th>
                    <th><b>ACTIVE MEMBERSHIP</b></th>
                    <th></th>
                  </tr>
                </thead>

                <tbody>
                  {{-- @php($i = 1) --}}
                  @foreach ($category as $key1 => $cat)
                    @foreach ($dataArray as $key2 => $arrays)
                      @foreach ($arrays as $key3 => $d)
                        @if ($cat->category == $d->category)
                    
                     @if ($loop->first)
                      <tr><td colspan="6" class="fw-bold bg-gradient-dark text-white">{{ $cat->category }}</td></tr>
                     @endif
                          <tr>
                            <td class="text-sm text-center">{{ $key3+1 }}</td>
                            <td class="text-sm fw-bold">{{ $d->name }}</td>
                            <td class="text-sm fw-bold text-center">{{ $d->achievement }}</td>
                            <td class="text-sm fw-bold text-center">{{ $d->target }}</td>
                            <td class="text-sm fw-bold text-center">{{ $d->active_membership }}</td>
                            <td class="text-sm fw-bold text-center"><a href="{{ url('employee/edit/content/'.$d->id) }}" class="btn bg-gradient-warning btn-sm my-auto w-auto">Edit</a></td>
                          </tr>
                        @endif
                      @endforeach
                    @endforeach
                  @endforeach
                </tbody>
              </table>
            </div>
            
          </div>
        </div>

      </div>
    </div>
  </div>