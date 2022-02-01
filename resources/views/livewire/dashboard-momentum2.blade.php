{{-- {{dd('john')}} --}}
<main>  
    <div class="container-fluid py-4">
      <div class="row">
        <h4>Dashboard Momentum</h4>
        <div class="col-xl-3 col-sm-2 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ANNUAL SALES (RM)</p>
                    <h5 class="font-weight-bolder mb-0">

                      @if ($digit_achievement1>9) 
                        <span style="font-size:14px";>{{ number_format( ($achievement1/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                      @elseif ($digit_achievement1>6)
                        <span style="font-size:14px";>{{ number_format( ($achievement1/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                      @elseif ($digit_achievement1>3)
                        <span style="font-size:14px";>{{ number_format( ($achievement1/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                      @else
                        <span style="font-size:14px";>{{$achievement1}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                      @endif

                    </h5>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target1>9) 
                      <span style="font-size:14px";>{{ number_format( ($target1/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target1>6)
                      <span style="font-size:14px";>{{ number_format( ($target1/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target1>3)
                      <span style="font-size:14px";>{{ number_format( ($target1/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target1}}</span><span style="color:blue;font-size:10px";> (target)</span>
                    @endif

                      {{-- <span style="font-size:14px";>{{$target1}}</span><span style="color:red;font-size:10px";> (target)</span> --}}
                      {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                    </h5>
                    {{-- <br> --}}

                    @if (number_format( (integer)(($achievement1/$target1)*100) )  <= 13) 
                    {{-- {{dd('johnif')}} --}}
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-sm  font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement1/$target1)*100) ) }}%</span>
                    </div>
                    @else
                    {{-- {{dd('johnelse')}} --}}
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement1/$target1)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement1/$target1)*100) ) }}%</span></div>
                    </div>
                    @endif
                    
                    {{-- <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement1/$target1)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement1/$target1)*100) ) }}%</span></div>
                    </div> --}}
                  </div>
                </div>

                <div class="col-4 text-end">
                  {{-- <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"> --}}
                    {{-- <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i> --}}
                    {{-- <img src="../assets/img/small-logos/logo-spotify.svg"> --}}
                    {{-- <img src="../assets/img/ultimate-partners.png" class="avatar avatar-sm rounded-square me-2">     --}}
                    <img src="../assets/img/sales.png"  class="w-50">    
                  {{-- </div> --}}
                </div>
                <small>last updated at: {{date('j F Y', strtotime($updated1))}}</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">HR-MANPOWER (Recruitment)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement2>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement2/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement2>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement2/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement2>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement2/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement2}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @endif

                      {{-- {{$achievement2}}
                      <span class="text-success text-sm font-weight-bolder">{{ number_format( (integer)(($achievement2/$target2)*100) ) }}%</span> --}}
                    </h5>

                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target2>9) 
                      <span style="font-size:14px";>{{ number_format( ($target2/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target2>6)
                      <span style="font-size:14px";>{{ number_format( ($target2/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target2>3)
                      <span style="font-size:14px";>{{ number_format( ($target2/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target2}}</span><span style="color:red;font-size:10px";> (target)</span>
                    @endif
                      
                      {{-- {{$target2}}
                      <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                    </h5>
                    {{-- <br> --}}

                    @if (number_format( (integer)(($achievement2/$target2)*100) )  <= 13) 
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-center text-sm font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement2/$target2)*100) ) }}%</span>
                    </div>
                    @else
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement2/$target2)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement2/$target2)*100) ) }}%</span></div>
                    </div>
                    @endif
                    
                    {{-- <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement2/$target2)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement2/$target2)*100) ) }}%</span></div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/hr.png"  class="w-45">    
                </div>
                <small>last updated at: {{date('j F Y', strtotime($updated2))}}</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">HR-MANPOWER (Currently)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement4>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement4/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (team)</span>
                    @elseif ($digit_achievement4>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement4/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (team)</span>
                    @elseif ($digit_achievement4>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement4/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (team)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement4}}</span><span style="color:blue;font-size:10px";> (team)</span>
                    @endif

                    </h5>

                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target4>9) 
                      <span style="font-size:14px";>{{ number_format( ($target4/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (Intern)</span>
                    @elseif ($digit_target4>6)
                      <span style="font-size:14px";>{{ number_format( ($target4/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (Intern)</span>
                    @elseif ($digit_target4>3)
                      <span style="font-size:14px";>{{ number_format( ($target4/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (Intern)</span>
                    @else
                      <span style="font-size:14px";>{{$target4}}</span><span style="color:red;font-size:10px";> (Intern)</span>
                    @endif
                      
                    </h5>
                    <br>
                    {{-- <br> --}}

                    @if (number_format( (integer)(($achievement4/$target4)*100) )  <= 13) 
                    <div>
                      {{-- <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-center text-sm font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement4/$target4)*100) ) }}%</span> --}}
                    </div>
                    @else
                    <div>
                      {{-- <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement4/$target4)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement4/$target4)*100) ) }}%</span></div> --}}
                    </div>
                    @endif
                    
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/hr.png"  class="w-45">    
                </div>
                <small>last updated at: {{date('j F Y', strtotime($updated4))}}</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">DATABASE (pax)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement3>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement3/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement3>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement3/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement3>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement3/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement3}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @endif

                      {{-- {{$achievement3}}
                      <span class="text-success text-sm font-weight-bolder">{{ number_format( (integer)(($achievement3/$target3)*100) ) }}%</span> --}}
                    </h5>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target3>9) 
                      <span style="font-size:14px";>{{ number_format( ($target3/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target3>6)
                      <span style="font-size:14px";>{{ number_format( ($target3/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target3>3)
                      <span style="font-size:14px";>{{ number_format( ($target3/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target3}}</span><span style="color:red;font-size:10px";> (target)</span>
                    @endif

                      {{-- {{$target3}} --}}
                      {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                    </h5>
                    {{-- <br> --}}

                    @if (number_format( (integer)(($achievement3/$target3)*100) )  <= 13) 
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-center text-sm font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement3/$target3)*100) ) }}%</span>
                    </div>
                    @else
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement3/$target3)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement3/$target3)*100) ) }}%</span></div>
                    </div>
                    @endif
                    
                    {{-- <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement3/$target3)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement3/$target3)*100) ) }}%</span></div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/database.png"  class="w-45">   
                </div>
                <small>last updated at: {{date('j F Y', strtotime($updated3))}}</small>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">IMPI (RM)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement4>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement4/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement4>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement4/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement4>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement4/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement4}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @endif

                    </h5>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target4>9) 
                      <span style="font-size:14px";>{{ number_format( ($target4/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target4>6)
                      <span style="font-size:14px";>{{ number_format( ($target4/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target4>3)
                      <span style="font-size:14px";>{{ number_format( ($target4/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target4}}</span><span style="color:red;font-size:10px";> (target)</span>
                    @endif

                    </h5>
                    <br>
                    
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement4/$target4)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement4/$target4)*100) ) }}%</span></div>
                    </div>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/impi.png"  class="w-65">  
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        {{-- <div class="card mb-2"> --}}
          <div class="col-md-12">
            <hr>
            <h4>Membership</h4>
          </div>
          {{-- <div class="row"> --}}
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ULTIMATE PARTNERS (pax)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement5>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement5/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement5>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement5/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement5>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement5/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement5}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @endif

                      {{-- {{$achievement5}}
                      <span class="text-success text-sm font-weight-bolder">{{ number_format( (integer)(($achievement5/$target5)*100) ) }}%</span> --}}
                    </h5>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target5>9) 
                      <span style="font-size:14px";>{{ number_format( ($target5/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target5>6)
                      <span style="font-size:14px";>{{ number_format( ($target5/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target5>3)
                      <span style="font-size:14px";>{{ number_format( ($target5/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target5}}</span><span style="color:red;font-size:10px";> (target)</span>
                    @endif

                      {{-- {{$target5}} --}}
                      {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                    </h5>
                    {{-- <br> --}}

                    @if (number_format( (integer)(($achievement5/$target5)*100) )  <= 13) 
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-center text-sm font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement5/$target5)*100) ) }}%</span>
                    </div>
                    @else
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement5/$target5)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement5/$target5)*100) ) }}%</span></div>
                    </div>
                    @endif
                    
                    {{-- <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement5/$target5)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement5/$target5)*100) ) }}%</span></div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/ultimate-partners.png"  class="w-70">   
                </div>
                <small>last updated at: {{date('j F Y', strtotime($updated5))}}</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ULTIMATE PLUS (pax)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement6>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement6/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement6>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement6/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement6>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement6/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement6}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @endif

                      {{-- {{$achievement6}}
                      <span class="text-success text-sm font-weight-bolder">{{ number_format( (integer)(($achievement6/$target6)*100) ) }}%</span> --}}
                    </h5>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target6>9) 
                      <span style="font-size:14px";>{{ number_format( ($target6/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target6>6)
                      <span style="font-size:14px";>{{ number_format( ($target6/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target6>3)
                      <span style="font-size:14px";>{{ number_format( ($target6/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target6}}</span><span style="color:red;font-size:10px";> (target)</span>
                    @endif

                      {{-- {{$target6}} --}}
                      {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                    </h5>
                    {{-- <br> --}}

                    @if (number_format( (integer)(($achievement6/$target6)*100) )  <= 13)  
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-center text-sm font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement6/$target6)*100) ) }}%</span>
                    </div>
                    @else
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement6/$target6)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement6/$target6)*100) ) }}%</span></div>
                    </div>
                    @endif
                    
                    {{-- <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement6/$target6)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement6/$target6)*100) ) }}%</span></div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/ultimate-plus.png"  class="w-40">  
                </div>
                <small>last updated at: {{date('j F Y', strtotime($updated6))}}</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">PLATINUM (pax)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement7>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement7/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement7>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement7/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement7>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement7/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement7}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @endif

                      {{-- {{$achievement7}}
                      <span class="text-success text-sm font-weight-bolder">{{ number_format( (integer)(($achievement7/$target7)*100) ) }}%</span> --}}
                    </h5>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target7>9) 
                      <span style="font-size:14px";>{{ number_format( ($target7/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target7>6)
                      <span style="font-size:14px";>{{ number_format( ($target7/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target7>3)
                      <span style="font-size:14px";>{{ number_format( ($target7/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target7}}</span><span style="color:red;font-size:10px";> (target)</span>
                    @endif

                      {{-- {{$target7}} --}}
                      {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                    </h5>
                    {{-- <br> --}}

                    @if (number_format( (integer)(($achievement7/$target7)*100) )  <= 13)  
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-center text-sm font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement7/$target7)*100) ) }}%</span>
                    </div>
                    @else
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement7/$target7)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement7/$target7)*100) ) }}%</span></div>
                    </div>
                    @endif
                    
                    {{-- <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement7/$target7)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement7/$target7)*100) ) }}%</span></div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/platinum.png"  class="w-100">   
                </div>
                <small>last updated at: {{date('j F Y', strtotime($updated7))}}</small>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">ZEEPICKS (pax)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement8>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement8/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement8>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement8/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement8>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement8/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement8}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @endif

                    </h5>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target8>9) 
                      <span style="font-size:14px";>{{ number_format( ($target8/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target8>6)
                      <span style="font-size:14px";>{{ number_format( ($target8/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target8>3)
                      <span style="font-size:14px";>{{ number_format( ($target8/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target8}}</span><span style="color:red;font-size:10px";> (target)</span>
                    @endif

                    </h5>
                    <br>
                    @if ( number_format( (integer)(($achievement8/$target8)*100) )  == 'NULL') 
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement8/$target8)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">0%</span></div>
                    </div>
                    @else
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement8/$target8)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement8/$target8)*100) ) }}%</span></div>
                    </div>
                    @endif
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/zeepicks3.png"  class="w-100">  
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      {{-- </div>
    </div> --}}
        {{-- <h4>Social Media</h4> --}}
        {{-- <div class="card mb-4"> --}}
          <div class="col-md-12">
            <hr>
            <h4>Social Media</h4>
          </div>
          {{-- <div class="row"> --}}
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Facebook (Likes)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement9>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement9/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement9>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement9/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement9>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement9/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement9}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @endif

                      {{-- {{$achievement9}}
                      <span class="text-success text-sm font-weight-bolder">{{ number_format( (integer)(($achievement9/$target9)*100) ) }}%</span> --}}
                    </h5>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target9>9) 
                      <span style="font-size:14px";>{{ number_format( ($target9/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target9>6)
                      <span style="font-size:14px";>{{ number_format( ($target9/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target9>3)
                      <span style="font-size:14px";>{{ number_format( ($target9/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target9}}</span><span style="color:red;font-size:10px";> (target)</span>
                    @endif

                      {{-- {{$target9}} --}}
                      {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                    </h5>
                    {{-- <br> --}}

                    @if (number_format( (integer)(($achievement9/$target9)*100) )  <= 13) 
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-center text-sm font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement9/$target9)*100) ) }}%</span>
                    </div>
                    @else
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement9/$target9)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement9/$target9)*100) ) }}%</span></div>
                    </div>
                    @endif
                    
                    {{-- <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement9/$target9)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement9/$target9)*100) ) }}%</span></div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/fb.png" class="avatar avatar-sm rounded-circle me-2">   
                </div>
                <small>last updated at: {{date('j F Y', strtotime($updated9))}}</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Youtube (Subscribers)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement10>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement10/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement10>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement10/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement10>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement10/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement10}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @endif

                      {{-- {{$achievement10}}
                      <span class="text-success text-sm font-weight-bolder">{{ number_format( (integer)(($achievement10/$target10)*100) ) }}%</span> --}}
                    </h5>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target10>9) 
                      <span style="font-size:14px";>{{ number_format( ($target10/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target10>6)
                      <span style="font-size:14px";>{{ number_format( ($target10/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target10>3)
                      <span style="font-size:14px";>{{ number_format( ($target10/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target10}}</span><span style="color:red;font-size:10px";> (target)</span>
                    @endif

                      {{-- {{$target10}} --}}
                      {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                    </h5>
                    {{-- <br> --}}

                    @if (number_format( (integer)(($achievement10/$target10)*100) )  <= 13) 
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-center text-sm font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement10/$target10)*100) ) }}%</span>
                    </div>
                    @else
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement10/$target10)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement10/$target10)*100) ) }}%</span></div>
                    </div>
                    @endif
                    
                    {{-- <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement10/$target10)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement10/$target10)*100) ) }}%</span></div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/youtube.png" class="avatar avatar-sm rounded-circle me-2">   
                </div>
                <small>last updated at: {{date('j F Y', strtotime($updated10))}}</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Instagram (Followers)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement11>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement11/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement11>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement11/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement11>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement11/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement11}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @endif

                      {{-- {{$achievement11}}
                      <span class="text-success text-sm font-weight-bolder">{{ number_format( (integer)(($achievement11/$target11)*100) ) }}%</span> --}}
                    </h5>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target11>9) 
                      <span style="font-size:14px";>{{ number_format( ($target11/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target11>6)
                      <span style="font-size:14px";>{{ number_format( ($target11/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target11>3)
                      <span style="font-size:14px";>{{ number_format( ($target11/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target11}}</span><span style="color:red;font-size:10px";> (target)</span>
                    @endif

                      {{-- {{$target11}} --}}
                      {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                    </h5>
                    {{-- <br> --}}

                    @if (number_format( (integer)(($achievement11/$target11)*100) )  <= 13) 
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-center text-sm font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement11/$target11)*100) ) }}%</span>
                    </div>
                    @else
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement11/$target11)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement11/$target11)*100) ) }}%</span></div>
                    </div>
                    @endif
                    
                    {{-- <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement11/$target11)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement11/$target11)*100) ) }}%</span></div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/ig.png" class="avatar avatar-sm rounded-circle me-2">   
                </div>
                <small>last updated at: {{date('j F Y', strtotime($updated11))}}</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Tiktok (Followers)</p>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_achievement12>9) 
                      <span style="font-size:14px";>{{ number_format( ($achievement12/1000000000), 2 ) }}B</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement12>6)
                      <span style="font-size:14px";>{{ number_format( ($achievement12/1000000), 2 ) }}M</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @elseif ($digit_achievement12>3)
                      <span style="font-size:14px";>{{ number_format( ($achievement12/1000), 2 ) }}K</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @else
                      <span style="font-size:14px";>{{$achievement12}}</span><span style="color:blue;font-size:10px";> (achievement)</span>
                    @endif

                      {{-- {{$achievement12}}
                      <span class="text-success text-sm font-weight-bolder">{{ number_format( (integer)(($achievement12/$target12)*100) ) }}%</span> --}}
                    </h5>
                    <h5 class="font-weight-bolder mb-0">

                    @if ($digit_target12>9) 
                      <span style="font-size:14px";>{{ number_format( ($target12/1000000000), 2 ) }}B</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target12>6)
                      <span style="font-size:14px";>{{ number_format( ($target12/1000000), 2 ) }}M</span><span style="color:red;font-size:10px";> (target)</span>
                    @elseif ($digit_target12>3)
                      <span style="font-size:14px";>{{ number_format( ($target12/1000), 2 ) }}K</span><span style="color:red;font-size:10px";> (target)</span>
                    @else
                      <span style="font-size:14px";>{{$target12}}</span><span style="color:red;font-size:10px";> (target)</span>
                    @endif

                      {{-- {{$target12}} --}}
                      {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                    </h5>
                    {{-- <br> --}}

                    @if (number_format( (integer)(($achievement12/$target12)*100) )  <= 13) 
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"><span class="text-center text-sm font-weight-bolder">0%</span></div><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement12/$target12)*100) ) }}%</span>
                    </div>
                    @else
                    <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement12/$target12)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement12/$target12)*100) ) }}%</span></div>
                    </div>
                    @endif

                    {{-- <div class="progress">
                      <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ number_format( (integer)(($achievement12/$target12)*100) ) }}%;"><span class="text-dark text-sm font-weight-bolder">{{ number_format( (integer)(($achievement12/$target12)*100) ) }}%</span></div>
                    </div> --}}
                  </div>
                </div>
                <div class="col-4 text-end">
                  <img src="../assets/img/tiktok.png" class="avatar avatar-sm rounded-circle me-2">   
                </div>
                <small>last updated at: {{date('j F Y', strtotime($updated12))}}</small>
              </div>
            </div>
          </div>
        </div>
      {{-- </div>
      </div>       --}}
    </div>


    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script src="../assets/js/plugins/Chart.extension.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        tooltips: {
          enabled: true,
          mode: "index",
          intersect: false,
        },
        scales: {
          yAxes: [{
            gridLines: {
              display: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 0,
              fontSize: 14,
              lineHeight: 3,
              fontColor: "#fff",
              fontStyle: 'normal',
              fontFamily: "Open Sans",
            },
          }, ],
          xAxes: [{
            gridLines: {
              display: false,
            },
            ticks: {
              display: false,
              padding: 20,
            },
          }, ],
        },
      },
    });

    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(253,235,173,0.4)');
    gradientStroke1.addColorStop(0.2, 'rgba(245,57,57,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(255,214,61,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.4)');
    gradientStroke2.addColorStop(0.2, 'rgba(245,57,57,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(255,214,61,0)'); //purple colors


    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#fbcf33",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#f53939",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6

          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        tooltips: {
          enabled: true,
          mode: "index",
          intersect: false,
        },
        scales: {
          yAxes: [{
            gridLines: {
              borderDash: [2],
              borderDashOffset: [2],
              color: '#dee2e6',
              zeroLineColor: '#dee2e6',
              zeroLineWidth: 1,
              zeroLineBorderDash: [2],
              drawBorder: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              fontSize: 11,
              fontColor: '#adb5bd',
              lineHeight: 3,
              fontStyle: 'normal',
              fontFamily: "Open Sans",
            },
          }, ],
          xAxes: [{
            gridLines: {
              zeroLineColor: 'rgba(0,0,0,0)',
              display: false,
            },
            ticks: {
              padding: 10,
              fontSize: 11,
              fontColor: '#adb5bd',
              lineHeight: 3,
              fontStyle: 'normal',
              fontFamily: "Open Sans",
            },
          }, ],
        },
      },
    });
  </script>