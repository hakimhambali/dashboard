<div>
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
            <div class="card-header pb-0">
              <h6><strong>LIST OF CONTENT</strong></h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Logo</th> --}}
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">Description</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Achievement</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Target</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Edit</th>
                      {{-- <th></th> --}}
                    </tr>
                  </thead>
                  <tbody>


                    <tr>
                      {{-- <td>
                        <div class="d-flex px-2">
                          <div> --}}
                            {{-- <img src="../assets/img/ultimate-partners.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify"> --}}
                            {{-- <img src="../assets/img/sales.png"  class="w-5">   --}}
                          {{-- </div>
                        </div>
                      </td> --}}
                      <td>
                        <p class="text-sm font-weight-bold mb-0">SALES & REVENUE - ANNUAL SALES (RM)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement1}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target1}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'1') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                          {{-- <a href="{{ url('employee/displaykpi/'.$dates->id.'/'.$dates->user_id.'/'.$dates->year.'/'.$dates->month) }}" type="button" class="btn bg-gradient-secondary w-auto me-2">View KPI Master</a> --}}
                            {{-- <a href="{{ url('employee/displaykpi/'.$dates->id.'/'.$dates->user_id.'/'.$dates->year.'/'.$dates->month) }}" type="button" class="btn bg-gradient-secondary w-auto me-2">View KPI Master</a> --}}
                        </div>
                      </td>
                    </tr>

                    <tr>
                      {{-- <td>
                        <div class="d-flex px-2">
                          <div> --}}
                            {{-- <img src="../assets/img/hr.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify"> --}}
                            {{-- <img src="../assets/img/hr.png"  class="w-7">     --}}
                          {{-- </div>
                        </div>
                      </td> --}}
                      <td>
                        <p class="text-sm font-weight-bold mb-0">HR - MANPOWER (Recruitment)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement2}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target2}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'2') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                            {{-- <a href="{{ url('employee/displaykpi/'.$dates->id.'/'.$dates->user_id.'/'.$dates->year.'/'.$dates->month) }}" type="button" class="btn bg-gradient-secondary w-auto me-2">View KPI Master</a> --}}
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">HR - MANPOWER (Currently)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement4}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target4}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'4') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      {{-- <td>
                        <div class="d-flex px-2">
                          <div> --}}
                            {{-- <img src="../assets/img/platinum.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify"> --}}
                            {{-- <img src="../assets/img/database.png"  class="w-7">    --}}
                          {{-- </div>
                        </div>
                      </td> --}}
                      <td>
                        <p class="text-sm font-weight-bold mb-0">DATABASE (pax)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement3}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target3}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'3') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                            {{-- <a href="{{ url('employee/displaykpi/'.$dates->id.'/'.$dates->user_id.'/'.$dates->year.'/'.$dates->month) }}" type="button" class="btn bg-gradient-secondary w-auto me-2">View KPI Master</a> --}}
                        </div>
                      </td>
                    </tr>

                    {{-- <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/impi.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">IMPI (RM)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement4}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target4}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'4') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                        </div>
                      </td>
                    </tr> --}}

                    <tr>
                      {{-- <td>
                        <div class="d-flex px-2">
                          <div> --}}
                            {{-- <img src="../assets/img/arb.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify"> --}}
                            {{-- <img src="../assets/img/ultimate-partners.png"  class="w-8">    --}}
                          {{-- </div>
                        </div>
                      </td> --}}
                      <td>
                        <p class="text-sm font-weight-bold mb-0">ULTIMATE PARTNERS (pax)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement5}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target5}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'5') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                            {{-- <a href="{{ url('employee/displaykpi/'.$dates->id.'/'.$dates->user_id.'/'.$dates->year.'/'.$dates->month) }}" type="button" class="btn bg-gradient-secondary w-auto me-2">View KPI Master</a> --}}
                        </div>
                      </td>
                    </tr>

                    <tr>
                      {{-- <td>
                        <div class="d-flex px-2">
                          <div> --}}
                            {{-- <img src="../assets/img/rpm.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify"> --}}
                            {{-- <img src="../assets/img/ultimate-plus.png"  class="w-7">   --}}
                          {{-- </div>
                        </div>
                      </td> --}}
                      <td>
                        <p class="text-sm font-weight-bold mb-0">ULTIMATE PLUS (pax)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement6}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target6}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'6') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                            {{-- <a href="{{ url('employee/displaykpi/'.$dates->id.'/'.$dates->user_id.'/'.$dates->year.'/'.$dates->month) }}" type="button" class="btn bg-gradient-secondary w-auto me-2">View KPI Master</a> --}}
                        </div>
                      </td>
                    </tr>

                    <tr>
                      {{-- <td>
                        <div class="d-flex px-2">
                          <div> --}}
                            {{-- <img src="../assets/img/zeepicks.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify"> --}}
                            {{-- <img src="../assets/img/platinum.png"  class="w-7">    --}}
                          {{-- </div>
                        </div>
                      </td> --}}
                      <td>
                        <p class="text-sm font-weight-bold mb-0">PLATINUM (pax)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement7}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target7}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'7') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                            {{-- <a href="{{ url('employee/displaykpi/'.$dates->id.'/'.$dates->user_id.'/'.$dates->year.'/'.$dates->month) }}" type="button" class="btn bg-gradient-secondary w-auto me-2">View KPI Master</a> --}}
                        </div>
                      </td>
                    </tr>

                    {{-- <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="../assets/img/roketez.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">Roketez (RM)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement8}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target8}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'8') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                        </div>
                      </td>
                    </tr> --}}

                    <tr>
                      {{-- <td>
                        <div class="d-flex px-2">
                          <div> --}}
                            {{-- <img src="../assets/img/fb.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify"> --}}
                          {{-- </div>
                        </div>
                      </td> --}}
                      <td>
                        <p class="text-sm font-weight-bold mb-0">Facebook (Likes)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement9}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target9}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'9') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                            {{-- <a href="{{ url('employee/displaykpi/'.$dates->id.'/'.$dates->user_id.'/'.$dates->year.'/'.$dates->month) }}" type="button" class="btn bg-gradient-secondary w-auto me-2">View KPI Master</a> --}}
                        </div>
                      </td>
                    </tr>

                    <tr>
                      {{-- <td>
                        <div class="d-flex px-2">
                          <div> --}}
                            {{-- <img src="../assets/img/youtube.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify"> --}}
                          {{-- </div>
                        </div>
                      </td> --}}
                      <td>
                        <p class="text-sm font-weight-bold mb-0">Youtube (Subscribers)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement10}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target10}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'10') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                            {{-- <a href="{{ url('employee/displaykpi/'.$dates->id.'/'.$dates->user_id.'/'.$dates->year.'/'.$dates->month) }}" type="button" class="btn bg-gradient-secondary w-auto me-2">View KPI Master</a> --}}
                        </div>
                      </td>
                    </tr>

                    <tr>
                      {{-- <td>
                        <div class="d-flex px-2">
                          <div> --}}
                            {{-- <img src="../assets/img/ig.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify"> --}}
                          {{-- </div>
                        </div>
                      </td> --}}
                      <td>
                        <p class="text-sm font-weight-bold mb-0">Instagram (Followers)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement11}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target11}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'11') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                            {{-- <a href="{{ url('employee/displaykpi/'.$dates->id.'/'.$dates->user_id.'/'.$dates->year.'/'.$dates->month) }}" type="button" class="btn bg-gradient-secondary w-auto me-2">View KPI Master</a> --}}
                        </div>
                      </td>
                    </tr>

                    <tr>
                      {{-- <td>
                        <div class="d-flex px-2">
                          <div> --}}
                            {{-- <img src="../assets/img/tiktok.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify"> --}}
                          {{-- </div>
                        </div>
                      </td> --}}
                      <td>
                        <p class="text-sm font-weight-bold mb-0">Tiktok (Followers)</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$achievement12}}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{$target12}}</p>
                      </td>
                      <td>
                        <div class="mt-3 d-flex">
                          <a href="{{ url('employee/edit/content/'.'12') }}" class="btn bg-gradient-warning w-auto me-2" role="button">Edit</a>
                            {{-- <a href="{{ url('employee/displaykpi/'.$dates->id.'/'.$dates->user_id.'/'.$dates->year.'/'.$dates->month) }}" type="button" class="btn bg-gradient-secondary w-auto me-2">View KPI Master</a> --}}
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
</div>